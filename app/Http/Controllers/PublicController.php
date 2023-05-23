<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function upload()
    {
        return view('upload');
    }
    public function support()
    {
        return view('support');
    }
    public function send(Request $request)
    {
        $username = $request->user;
        $address = $request->email;
        $body = $request->body;

        $mail = new ContactMail($username, $address, $body);

        Mail::to($address)->send($mail);

        return redirect(route('support'))->with('status', 'Mail sent successfully!');
    }
}
