<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactForm;
use App\Mail\ContactFormMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SenderController extends Controller
{
    public function send_contact_form(ContactForm $request) {
        Mail::to("asmi046@gmail.com")->send(new ContactFormMail($request));
        return redirect(route("home"));
    }
}
