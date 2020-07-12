<?php

namespace App\Providers;

use App\Services\VerificationService;
use App\Services\VerificationServiceInterface;
use Illuminate\Support\ServiceProvider;

class VerificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(VerificationServiceInterface::class, VerificationService::class);
    }
}
