<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    function send_mail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        $name = $request->input('name');
        $email = (string)$request->input('email');
        $message = (string)$request->input('message');

        Log::info("Name: $name, Email: $email, Message: $message");
        // Send the email
        Mail::to('shivansha56@gmail.com')->send(new ContactMail($name, $email, $message));

        return back()->with('success', 'Email sent successfully!');
    }
}
