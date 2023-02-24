<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Hi {{$firstName}} {{$lastName}}</p>
    <p>Your order has been successfully placed.</p>
    <hr>
    <table>
        <thead>
            <th>name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Sub Total</th>
        </thead>
        <tbody>
            @foreach ($orders as $items)
                <tr>
                    <td>{{$items['name']}}</td>
                    <td>{{$items['quantity']}}</td>
                    <td>{{$items['sale_price']}}</td>
                    <td>{{$items['total']}}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3" style="border-top: solid 1px #ccc;"></td>
                <td style="font-size: 15px; font-weight: bold;">Shipping: Free Shipping</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 20px; font-weight: bold;">Total: ${{$amount}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
