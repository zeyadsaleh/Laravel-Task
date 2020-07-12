<?php

namespace App\Services;

use App\Strategies\SMSVerification\SmsStrategy;
use App\Strategies\EmailVerification\EmailStrategy;

class VerificationService implements VerificationServiceInterface
{
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
            return response()->json(['message' => 'Please provide the verification method "sms or email"']);
        }
    }
}
