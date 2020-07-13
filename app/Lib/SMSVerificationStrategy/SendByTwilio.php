<?php

namespace App\Lib\SMSVerificationStrategy;

use App\Traits\ApiResponser;
use Twilio\Rest\Client;

class SendByTwilio implements SmsStrategy
{
    use ApiResponser;
    private $client;
    private $twilio_verify_sid;

    function __construct()
    {
        $this->config();
    }
    
    public function config()
    {
        $token = config('twilio.token');
        $twilio_sid = config('twilio.sid');
        $this->twilio_verify_sid = config('twilio.v_sid');
        $this->client = new Client($twilio_sid, $token);
    }

    public function send($phone_number)
    {
        $this->client->verify->v2->services($this->twilio_verify_sid)
            ->verifications
            ->create($phone_number, "sms");
        return $this->successResponse('Verification code was send via SMS');
    }
}
