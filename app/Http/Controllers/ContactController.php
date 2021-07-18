<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.pages.contact');
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message')
        ]);
        Mail::to('info@skrillazlogistics.com')->send(new ContactFormMail($data));
        return redirect()->back()->with('message', 'Message sent successfully');
    }
}



