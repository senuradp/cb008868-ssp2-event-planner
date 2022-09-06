<?php

namespace App\Providers;

use App\Models\Auth\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //34:50
        // git commit -m "Laravel gate created to validate the user type from the templateand added the validation to the admin dropdown"
        Gate::define('accessAdministration', function(User $user){
            // dd($user);
            return $user->role === 'admin';
        });
    }
}
