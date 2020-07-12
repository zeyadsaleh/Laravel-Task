<?php

namespace App\Strategies\SMSVerification;

use Twilio\Rest\Client;

class SendByTwilio implements SmsStrategy
{
    public function send($phone_number)
    {
        $token = config('twilio.token');
        $twilio_sid = config('twilio.sid');
        $twilio_verify_sid = config('twilio.v_sid');
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($phone_number, "sms");
        return response()->json(['message' => 'Verification code was send via SMS']);
    }
}
