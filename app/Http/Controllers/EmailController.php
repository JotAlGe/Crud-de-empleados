<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class EmailController extends Controller
{
    function index()
    {
        return view('emails.create');
    }

    function store(Request $request)
    {
        $email = new ContactMail($request->all());
        Mail::to('juanchismo10@gmail.com')->send($email);
        return redirect()->route('emails.index')->with('success', 'Correo enviado');
    }
}
