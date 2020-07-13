<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUserRequest;
use App\Services\VerificationServiceInterface;

class VerificationController extends Controller
{
    private $verificationService;

    public function __construct(VerificationServiceInterface $verificationService)
    {
        $this->verificationService = $verificationService;
    }


    public function verify(ValidateUserRequest $request)
    {
        return $this->verificationService->verify($request);

    }
}
