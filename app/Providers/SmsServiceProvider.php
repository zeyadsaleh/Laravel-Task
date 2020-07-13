<?php

namespace App\Providers;

use App\Lib\SMSVerificationStrategy\SmsStrategy;
use App\Lib\SMSVerificationStrategy\SendByTwilio;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
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
        $this->app->bind(SmsStrategy::class, SendByTwilio::class);
    }
}
