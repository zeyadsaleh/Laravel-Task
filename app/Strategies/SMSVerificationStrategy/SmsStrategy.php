<?php

namespace App\Strategies\SMSVerificationStrategy;

interface SmsStrategy
{
    public function send($phone_number);
}
