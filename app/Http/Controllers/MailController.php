<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendWelcomeEmail;
use Illuminate\Support\Carbon;

class MailController extends Controller
{
    public function formEmail()
    {
        return view('mails.form');
    }

    public function send(Request $request)
    {
        $demo = new \stdClass();
        $demo->demo_one = 'Demo One Value';
        $demo->demo_two = 'Demo Two Value';
        $demo->sender = 'SenderUserName';
        $demo->receiver = 'Kuon Vu';
        $demo->email = $request->get('email', 'kuonvu.j3r7y@gmail.com');

        $mailJob = new SendWelcomeEmail($demo);
        dispatch($mailJob);

        return redirect('/');
    }
}
