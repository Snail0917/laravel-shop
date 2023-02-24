<?php

namespace App\Http\Controllers;

use Stripe;
use App\Models\Cart;
use Stripe\Error\Card;
use App\Mail\OrderMail;
use App\Models\Product;
use App\Models\Processing;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.checkout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!$request->get('product_id')) {
            return [
                'message' => 'Cart items returned!!!',
                'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            ];
        }

        //Getting product details
        $product = Product::where('id', $request->get('product_id'))->first();

        $productFoundInCart = Cart::where('product_id', $request->get('product_id'))->pluck('id');

        if($productFoundInCart->isEmpty()) {
            //Adding product in cart
            $cart = Cart::create([
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->sale_price,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            //Incrementing product quantity
            $cart = Cart::where('product_id', $request->get('product_id'))->increment('quantity');
        }

        //check user cart items
        if($cart) {
            return [
                'message' => 'Successfully added to cart!!!',
                'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            ];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     *
     */
    public function getCartItemsForCheckout()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        $finalData = [];
        $amount = 0;
        if(isset($cartItems)) {
            foreach($cartItems as $cartItem) {
                if($cartItem->product) {
                    foreach($cartItem->product as $cartProduct) {
                        if($cartProduct->id == $cartItem->product_id) {
                            $finalData[$cartItem->product_id]['id'] = $cartProduct->id;
                            $finalData[$cartItem->product_id]['name'] = $cartProduct->name;
                            $finalData[$cartItem->product_id]['quantity'] = $cartItem->quantity;
                            $finalData[$cartItem->product_id]['sale_price'] = $cartItem->price;
                            $finalData[$cartItem->product_id]['total'] = $cartItem->price * $cartItem->quantity;
                            $amount += $cartItem->price * $cartItem->quantity;
                            $finalData['totalAmount'] = $amount;
                        }
                    }
                }
            }
        }
        return response()->json($finalData);
    }

    public function processPayment(Request $request) {
        $country = $request->get('country');
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $address = $request->get('address');
        $city = $request->get('city');
        $state = $request->get('state');
        $zipCode = $request->get('zipCode');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $cardType = $request->get('cardType');
        $cardNumber = $request->get('cardNumber');
        $cvv = $request->get('cvv');
        $expirationMonth = $request->get('expirationMonth');
        $expirationYear = $request->get('expirationYear');

        $amount = $request->get('amount');
        $orders = $request->get('order');

        $ordersArray = [];

        //For order confirmation email.
        $orderDetail = ['orders'=>[]];
        $orderDetail['firstName'] = $request->get('firstName');
        $orderDetail['lastName'] = $request->get('lastName');
        $orderDetail['email'] = $request->get('email');
        $orderDetail['amount'] = $amount;

        //Getting order details.
        foreach($orders as $order) {
            if (isset($order['id'])) {
                $ordersArray[$order['id']]['order_id'] = $order['id'];
                $ordersArray[$order['id']]['quantity'] = $order['quantity'];

                $orderDetail['orders'][] = $order;
            }
        }

        //Process Payment
        $stripe = Stripe::make(env('STRIPE_SECRET'));
        $token = $stripe->tokens()->create([
            'card' => [
                'number' => $cardNumber,
                'exp_month' => $expirationMonth,
                'exp_year' => $expirationYear,
                'cvc' => $cvv,
            ],
        ]);

        if(!$token['id']) {
            session()->flash('error', 'Stripe Token generation failed!');
            return;
        }

        //Create a customer stripe.
        $customer = $stripe->customers()->create([
            'name' => $firstName.' '.$lastName,
            'email' => $email,
            'phone' => $phone,
            'address' => [
                'line1' => $address,
                'postal_code' => $zipCode,
                'city' => $city,
                'state' => $state,
                'country' => $country,
            ],
            'shipping' => [
                'name' => $firstName.' '.$lastName,
                'address' => [
                    'line1' => $address,
                    'postal_code' => $zipCode,
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                ],
            ],
            'card' => $token['id'],
        ]);

        //Code for charging the client in Stripe.
        $charge = $stripe->charges()->create([
            'customer' => $customer['id'],
            'amount' => $amount,
            'currency' => 'usd',
            'description' => 'Payment for order',
        ]);

        if($charge['status'] == 'succeeded') {
            //Capture the details from stripe.
            $customerIdStrip = $charge['id'];
            $amountRec = $charge['amount'];
            $client_id = auth()->user()->id;

            $processingDetails = Processing::create([
                'client_id' => auth()->user()->id,
                'client_name' => $firstName.' '.$lastName,
                'client_address' => json_encode([
                    'line1' => $address,
                    'postal_code' => $zipCode,
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                ]),
                'order_details' => json_encode($ordersArray),
                'amount' => $amount,
                'currency' => $charge['currency'],
            ]);

            if($processingDetails) {
dd($orderDetail);
                $orderMail = $this->sendOrderConfirmationMail($orderDetail);

                if($orderMail) {
                    dd($orderMail);
                } else {
                    dd('bad');
                }

                //Clear the cart after payment success.
                // Cart::where('user_id', $client_id)->delete();
                // return ['success' => 'Order completed successfully!'];
            }

        } else {
            // return ['error' => 'Order failed contact support!'];
        }
    }

    public function sendOrderConfirmationMail($order) {
        Mail::to($order['email'])->send(new OrderMail($order));
    }

}
