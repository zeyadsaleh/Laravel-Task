<?php 

namespace App\Strategies\SMSVerification;

interface SmsStrategy
{
    public function send($phone_number);
}