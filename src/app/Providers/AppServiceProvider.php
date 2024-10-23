<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (request()->is('hospital*')) {
            config([
                'session.cookie' => config('session.cookie_staff'),
                'session.table'  => config('session.table_staff'),
            ]);
        }
    }
}
