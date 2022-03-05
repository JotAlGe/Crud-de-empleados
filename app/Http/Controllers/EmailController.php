<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest as RequestsSendEmailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Http\Request\SendEmailRequest;

/**
 *
 * @param \App\Http\Requests\SendEmailRequest
 */

class EmailController extends Controller
{
    function index()
    {
        return view('emails.create');
    }

    function store(Request $request, RequestsSendEmailRequest $validated)
    {
        # validation
        $email = $validated->validated();

        $email = new ContactMail($request->all());
        Mail::to('juanchismo10@gmail.com')->send($email);
        return redirect()->route('emails.index')->with('success', 'Correo enviado');
    }
}
