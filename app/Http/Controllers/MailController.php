<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send() {
        Mail::send('mail', ['name', 'Test'], function($message) {
            $message->to('swed911@gmail.com', 'Artem')->subject('Test mail');
            $message->from('info@zlato.ua', 'Astvatsaturov');
        } );
    }
}
