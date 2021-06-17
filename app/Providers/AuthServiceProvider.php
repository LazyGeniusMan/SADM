<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('pemeriksa', function ($user) {
            if ($user->role == 'pemeriksa') {
                return true;
            }
                return false;
        });

        Gate::define('pemohon', function ($user) {
            if ($user->role == 'pemohon') {
                return true;
            }
                return false;
        });
        //
    }
}
