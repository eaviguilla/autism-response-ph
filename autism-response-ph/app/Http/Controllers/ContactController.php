<?php

namespace App\Http\Controllers;

use ContactUs;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index ()
    {
        return view('contents.contact');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:255',
            'email_con' => 'required|email|max:255',
            'message' => 'required|max:1000',
        ]);

        $contactmessage = ([
            'name' => $request->name,
            'email_con' => $request->email_con,
            'message' => $request->message
        ]);

        Mail::to('mtest5120@gmail.com')->send(new ContactMail($contactmessage));

        return back()->with('message_sent', 'Your Message has been sent Successfully!');
    }
}