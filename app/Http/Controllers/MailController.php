<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'ismahn abdallah',
            'body' => 'this is for testing using email smtp',
        ];
        Mail::to('smartdeliveryy77@gmail.com')->send(new TestMail($mailData));
        dd('email send successfully');
    }
}
