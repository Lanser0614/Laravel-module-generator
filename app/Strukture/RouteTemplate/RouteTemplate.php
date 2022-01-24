<?php

namespace App\Strukture\RouteTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;
use TimeHunter\LaravelFileGenerator\Interfaces\RouteSimpleTemplateInterface;

class RouteTemplate implements RouteSimpleTemplateInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function getTemplateData()
    {


        return [
            'route_name' => 'route',
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/routes',
            'namespace' => mb_strtolower($this->name).'-v1',
            'prefix' => '/'.mb_strtolower($this->name),
            // 'as' => mb_strtolower($this->name).'-v1',
            'use' => [
                'Illuminate\Support\Facades\Route',
                'App\Modules\V1\\'.$this->name.'\Http\Controllers\\'.$this->name.'Controller',
            ],
            'middleware' => 'api',
            'uri' => [
                [
                    'uri' => '/',
                    'rules' => [

                    ],
                    'method' => 'get',
                    'function' => 'all',
                    'class' => $this->name.'Controller',
                    'key' => 'all',
                    'type' => 'api'// api, api
                ],
                [
                    'uri' => '/{id?}',
                    'rules' => [
                        'name' => 'required|nullable',
                        'id' => 'integer'
                    ],
                    'method' => 'get',
                    'function' => 'show',
                    'class' => $this->name.'Controller',
                    'key' => 'show',
                    'type' => 'api'// api, api
                ],
                [
                    'uri' => '/',
                    'class' => $this->name.'Controller',
                    'function' => 'create',
                    'key' => 'create',
                    'rules' => [

                    ],
                    'method' => 'post',
                    'type' => 'api'// api, api
                ],
                [
                    'uri' => '/{id?}',
                    'class' => $this->name.'Controller',
                    'key' => 'updateContent',
                    'rules' => [

                    ],
                    'method' => 'put',
                    'function' => 'updateContent',
                    'type' => 'api'// api, api
                ],
                [
                    'uri' => '/{id?}',
                    'class' => $this->name.'Controller',
                    'key' => 'delete',
                    'rules' => [
                    ],
                    'method' => 'delete',
                    'function' => 'delete',
                    'type' => 'api'// api, api
                ],
            ],




        ];
    }
}
