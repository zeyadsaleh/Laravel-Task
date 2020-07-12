<?php

namespace App\Providers;

use App\Strategies\EmailVerificationStrategy\EmailStrategy;
use App\Strategies\EmailVerificationStrategy\SendByMailTrap;
use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
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
        $this->app->bind(EmailStrategy::class, SendByMailTrap::class);
    }
}
