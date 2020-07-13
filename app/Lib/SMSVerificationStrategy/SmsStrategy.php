<?php

namespace App\Lib\SMSVerificationStrategy;

interface SmsStrategy
{
    public function config();
    public function send($phone_number);
}
