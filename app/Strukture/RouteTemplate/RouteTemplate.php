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
            'namespace' => 'App\Modules\V1\\'.$this->name.'\routes',
            'prefix' => '/'.mb_strtolower($this->name),
            'use' => [
                'Illuminate\Support\Facades\Route'
            ],
            'middleware' => 'api',
            'uri' => [
                [
                    'uri' => '/pets',
                    'rules' => [

                    ],
                    'method' => 'get',
                    'function' => 'getPets',
                    'class' => 'test',
                    'key' => 'test',
                    'type' => 'api'// api, api
                ],
                [
                    'uri' => '/pets',
                    'rules' => [
                        'name' => 'required|nullable',
                        'id' => 'integer'
                    ],
                    'method' => 'post',
                    'function' => 'createPet',
                    'class' => 'test',
                    'key' => 'test',
                    'type' => 'api'// api, api
                ],
                [
                    'uri' => '/pets/{id}/{ss}',
                    'class' => 'test',
                    'key' => 'test',
                    'rules' => [
                        'name' => 'required',
                        'id' => 'integer'
                    ],
                    'method' => 'put',
                    'function' => 'updatePet',
                    'type' => 'api'// api, api
                ],
                [
                    'uri' => '/pets/{i}',
                    'class' => 'test',
                    'key' => 'test',
                    'rules' => [
                        'name' => 'required',
                        'id' => 'integer'
                    ],
                    'method' => 'patch',
                    'function' => 'updatePetWithSomething',
                    'type' => 'api'// api, api
                ],
            ],




        ];
    }
}
