<?php

namespace App\Strukture\ServiceProviderTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class ServiceProviderTemplate implements ClassSimpleTemplateInterface
{
    public $name;
    public $point = '"';

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function getTemplateData()
    {
        return [

            'class_type' => 'class',
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/Providers',
            'namespace' =>'App\Modules\V1\\'.$this->name.'\Providers',
            'use' => [
                'App\Modules\V1\\'.$this->name.'\Repositories\Contracts\\'.'I'.$this->name.'ReadRepository',
                'App\Modules\V1\\'.$this->name.'\Repositories\Contracts\\'.'I'.$this->name.'WriteRepository',
                'App\Modules\V1\\'.$this->name.'\Repositories\\'.$this->name.'WriteRepository',
                'App\Modules\V1\\'.$this->name.'\Repositories\\'.$this->name.'ReadRepository',
                'Illuminate\Support\Facades\Route',
                'Illuminate\Support\ServiceProvider',
                'App\Modules\V1\\'.$this->name.'\Models\\'.$this->name,
            ],
            'class_name' => $this->name.'ServiceProvider',
            'extends' => 'ServiceProvider',
            'implements' => [],
            'traits' => [

            ],
            'properties' => [
               
            ],
            'functions' => [
                'protected $namespace = "App\Modules\V1\\'.$this->name.'\Http\Controllers";',
                'protected $apiPrefix = "/api/v1/";',
                'protected $defer = false;',
                'public function boot()
                {
                    $this->registerConfig();
                    $this->routes();

                    if ($this->app->runningInConsole()) {
                        $this->registerMigrations();
                    }

                    $this->loadingRepositories();
                }',
                ' public function loadingRepositories(){
                    $this->app->bind(I'.$this->name.'WriteRepository::class, '.$this->name.'WriteRepository::class);
                    $this->app->bind(I'.$this->name.'ReadRepository::class, '.$this->name.'ReadRepository::class);
                }',
                ' protected function registerConfig()
                {
                    $this->mergeConfigFrom(
                        __DIR__ . "/../config/config.php", "'.mb_strtolower($this->name).'"
                    );
                }',
                '   protected function registerMigrations()
                {
                    $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
                }',

                'public function routes()
                {
                    Route::
                    prefix($this->apiPrefix)
                        ->namespace($this->namespace)
                        ->middleware("api")
                        ->group(__DIR__ . "/../routes/route.php");
                }',
            ],
            'annotations'=>[]
        ];
    }
}
