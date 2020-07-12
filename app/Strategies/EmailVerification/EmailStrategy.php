<?php 

namespace App\Strategies\EmailVerification;

interface EmailStrategy
{
    public function send($email);
}