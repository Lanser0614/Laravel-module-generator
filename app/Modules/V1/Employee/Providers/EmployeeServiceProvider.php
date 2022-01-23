<?php

namespace App\Modules\V1\Employee\Providers;

use App\Modules\V1\Employee\Repositories\Contracts\IEmployeeReadRepository;
use App\Modules\V1\Employee\Repositories\Contracts\IEmployeeWriteRepository;
use App\Modules\V1\Employee\Repositories\EmployeeWriteRepository;
use App\Modules\V1\Employee\Repositories\EmployeeReadRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Modules\V1\Employee\Models\Employee;

/**
 */
class EmployeeServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Modules\V1\Employee\Http\Controllers';
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

    public function loadingRepositories()
    {
        $this->app->bind(IEmployeeWriteRepository::class, EmployeeWriteRepository::class);
        $this->app->bind(IEmployeeReadRepository::class, EmployeeReadRepository::class);
    }

    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . "/../config/config.php",
            "employee"
        );
    }

    protected function registerMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
    }

    public function routes()
    {
        Route::prefix($this->apiPrefix)
            ->namespace($this->namespace)
            ->middleware("api")
            ->group(__DIR__ . "/../routes/route.php");
    }
}
