<?php

namespace App\Http\Controllers;

use Throwable;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
     * Contact form send mail.
     */
    public function sendMail(Request $request)
    {
        try {
            $mailData = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'message' => $request->get('message'),
            ];
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($mailData));
            return ['success' => 'Email sent successfully!'];
        } catch (Throwable $e) {
            return ['error' => 'Something went wrong!'];
        }
    }
}
