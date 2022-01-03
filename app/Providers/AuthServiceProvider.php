<?php

namespace App\Providers;

use App\Models\Company;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        // Only company owners can edit or update a company
        Gate::define('create-company', function (User $user) {
            $authorized_roles = ['admin', 'company_owner'];
            return in_array($user->role, $authorized_roles);
        });
        
        // Only company owners can edit or update a company
        Gate::define('update-company', function (User $user, Company $company) {
            return $user->id === $company->user_id;
        });

        // Define roles:

        // define a admin user role 
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
         });
        
         // define a company owner role (admin's can do also company owner's actions)
         Gate::define('isCompanyOwner', function($user) {
             return $user->role == 'company_owner';
         });
       
         // define a user role 
         Gate::define('isUser', function($user) {
             return $user->role == 'user';
         });
        
    }
}
