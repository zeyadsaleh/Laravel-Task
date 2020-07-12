<?php

namespace App\Strategies\EmailVerificationStrategy;

use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyUser;

class SendByMailTrap implements EmailStrategy
{
    use ApiResponser;

    public function send($email)
    {
        $code = mt_rand(1000, 9999);
        Mail::to($email)->send(new VerifyUser($code));
        return $this->successResponse('Verification code was send via Email');
    }
}
