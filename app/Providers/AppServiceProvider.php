<?php

namespace App\Providers;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dashboard $dashboard)
    {
        $permissions_orders = ItemPermission::group('Orders')
        ->addPermission('create', 'Create')
        ->addPermission('delete', 'Delete')
        ->addPermission('edit', 'Edit')
        ->addPermission('view', 'View');

        $dashboard->registerPermissions($permissions_orders);

    }
}
