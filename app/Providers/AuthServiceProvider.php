<?php

namespace App\Providers;

use App\Product;
use App\Services\PermissionGateAndPolicyAccess;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        $permissionGateAndPolicy = new PermissionGateAndPolicyAccess;
        $permissionGateAndPolicy->setGateAndPolicyAccess();
        Gate::define('menu-list', function ($user) {
            return $user->checkPermissinAccess(config('permissions.access.list-menu'));
        });
        Gate::define('product-list', function ($user) {
            return $user->checkPermissinAccess('list_product');
        });
        Gate::define('product-edit', function ($user, $id) {
            if ($user->checkPermissinAccess('edit_product') && $user->id === Product::find($id)->user_id) {
                return true;
            }
            return false;
        });
    }
}
