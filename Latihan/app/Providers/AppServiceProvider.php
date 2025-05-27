<?php

namespace App\Providers;
use Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Gate::define('isadmin', function(User $user){

            return $user->level == 'admin';
        });

        Gate::define('isuser', function(User $user){
            return $user->level == 'admin';
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
