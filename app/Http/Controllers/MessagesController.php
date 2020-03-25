<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(){
       // return $request->get('email');
       // return request('email');

     $message =  request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3'
       ]);


       Mail::to('ctobal.torres@gmail.com')->queue(new MessageReceived($message));

       return back()->with('status', 'Mensaje enviado correctamente');
    }
}
