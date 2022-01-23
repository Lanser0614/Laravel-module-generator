<?php

namespace App\Modules\V1\Branch\Providers;

use App\Modules\V1\Branch\Repositories\Contracts\IBranchReadRepository;
use App\Modules\V1\Branch\Repositories\Contracts\IBranchWriteRepository;
use App\Modules\V1\Branch\Repositories\BranchWriteRepository;
use App\Modules\V1\Branch\Repositories\Contracts\BranchReadRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Modules\V1\Branch\Models\Branch;

/**
 */
class BranchServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Modules\V1\Branch\Http\Controllers';
    protected $apiPrefix = '/api/v1/';
    protected $defer = false;

    public function boot()
                {
                    $this->registerConfig();
                    $this->routes();

                    if ($this->app->runningInConsole()) {
                        $this->registerMigrations();
                    }

                    $this->loadingRepositories();
                }

     public function loadingRepositories(){
                    $this->app->bind(IBranchWriteRepository::class, BranchWriteRepository::class);
                    $this->app->bind(IBranchReadRepository::class, BranchReadRepository::class);
                }

     protected function registerConfig()
                {
                    $this->mergeConfigFrom(
                        __DIR__ . "/../config/config.php", "branch"
                    );
                }

       protected function registerMigrations()
                {
                    $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
                }

    public function routes()
                {
                    Route::
                    prefix($this->apiPrefix)
                        ->namespace($this->namespace)
                        ->middleware("api")
                        ->group(__DIR__ . "/../routes/route.php");
                }

}

