<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'Webedia\Repositories\Contracts\PostInterface',
            'Webedia\Repositories\PostRepository'
        );

        $this->app->bind(
            'Webedia\Repositories\Contracts\UserInterface',
            'Webedia\Repositories\UserRepository'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
