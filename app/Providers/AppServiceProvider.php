<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\V1\Branch\Providers\BranchServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->register(BranchServiceProvider::class);
    }
}
