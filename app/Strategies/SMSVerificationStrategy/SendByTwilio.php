<?php

namespace App\Strategies\SMSVerificationStrategy;

use App\Traits\ApiResponser;
use Twilio\Rest\Client;

class SendByTwilio implements SmsStrategy
{
    use ApiResponser;

    public function send($phone_number)
    {
        $token = config('twilio.token');
        $twilio_sid = config('twilio.sid');
        $twilio_verify_sid = config('twilio.v_sid');
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($phone_number, "sms");
        return $this->successResponse('Verification code was send via SMS');
    }
}
