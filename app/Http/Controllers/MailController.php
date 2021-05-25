<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => 'Mail from Abu Saleh Faysal',
            'body' => 'This is test mail'
        ];
        Mail::to("asfaysal.bracu@gmail.com")->send(new TestMail($details));
        return "Email Send";
    }
}
