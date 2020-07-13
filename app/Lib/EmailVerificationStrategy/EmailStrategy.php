<?php

namespace App\Lib\EmailVerificationStrategy;

interface EmailStrategy
{

    public function send($email);
}
