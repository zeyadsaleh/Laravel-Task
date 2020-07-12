<?php

namespace App\Strategies\EmailVerificationStrategy;

interface EmailStrategy
{

    public function send($email);
}
