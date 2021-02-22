<?php

namespace Module\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Module\Core\Models\User;
use Module\Core\Observers\UserObserver;

class AdminServiceProvider extends ServiceProvider
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
    public function boot()
    {
        $this->loadViewsFrom(base_path('module/Admin/resources/views'), 'admin');
        User::observe(UserObserver::class);
    }
}
