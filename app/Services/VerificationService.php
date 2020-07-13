<?php

namespace App\Services;

use App\Traits\ApiResponser;
use App\Lib\SMSVerificationStrategy\SmsStrategy;
use App\Lib\EmailVerificationStrategy\EmailStrategy;
use Illuminate\Support\Facades\Log;
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

        //if the verification method failed with sms then send it with email
        try {
            return $this->smsStrategy->send($request->phone_number);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());  //to see why twilio is not working
            return $this->emailStrategy->send($request->email);
        } 
        

        //code if the user wants to choose the verification method manually from the config file
        /* 
        if (config('twilio.verification_method') == 'sms') {
            return $this->smsStrategy->send($request->phone_number);
        } elseif (config('twilio.verification_method') == 'email') {
            return $this->emailStrategy->send($request->email);
        } else {
            return $this->errorResponse('Please provide the verification method "sms or email"', 400);
        }
        */
    }
}
