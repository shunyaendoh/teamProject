<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
          $this->app->bind('ChatKit', function() {
        return new \Chatkit\Chatkit([
            'instance_locator' => config('services.chatkit.locator'),
            'key' => config('services.chatkit.secret'),
        ]);
    });
    }
}
