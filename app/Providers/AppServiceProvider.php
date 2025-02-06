<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Property;
use App\Policies\UserPolicy;
use App\Policies\PropertyPolicy;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Property::class => PropertyPolicy::class,
        User::class => UserPolicy::class,

    ];
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
        // if (env('APP_ENV') === 'local') {
        //     URL::forceScheme('https');
        // }
    }
}
