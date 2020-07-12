<?php

namespace App\Providers;

use App\Strategies\SMSVerification\SmsStrategy;
use App\Strategies\SMSVerification\SendByTwilio;
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
