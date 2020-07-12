<?php

namespace App\Services;

use App\Traits\ApiResponser;
use App\Strategies\SMSVerificationStrategy\SmsStrategy;
use App\Strategies\EmailVerificationStrategy\EmailStrategy;

class VerificationService implements VerificationServiceInterface
{
    use ApiResponser;

    private $smsStrategy;
    private $emailStrategy;

    public function __construct(SmsStrategy $smsStrategy, EmailStrategy $emailStrategy)
    {
        $this->smsStrategy = $smsStrategy;
        $this->emailStrategy = $emailStrategy;
    }


    public function verify($request)
    {

        if (config('twilio.verification_method') == 'sms') {
            return $this->smsStrategy->send($request->phone_number);
        } elseif (config('twilio.verification_method') == 'email') {
            return $this->emailStrategy->send($request->email);
        } else {
            return $this->errorResponse('Please provide the verification method "sms or email"', 400);
        }
    }
}
