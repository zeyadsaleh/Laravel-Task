<?php

namespace App\Strategies\EmailVerification;

use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyUser;

class SendByMailTrap implements EmailStrategy
{
    public function send($email)
    {
        $code = mt_rand(1000,9999);
        Mail::to($email)->send(new VerifyUser($code));
        return response()->json(['message' => 'Verification code was send via Email']);
    }
}
