<?php

namespace App\Strukture\ConfigTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;
use TimeHunter\LaravelFileGenerator\Interfaces\RouteSimpleTemplateInterface;

class ConfigTemplate implements RouteSimpleTemplateInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }



    public function getTemplateData()
    {
        return [
            'route_name' => 'config',
            'directory' => app_path() .  '/Modules/V1/' . $this->name . '/config',
            'functions' => [
                'return [];',
                    ],
            'namespace' => '',
            'prefix' => '',
            'use' => [],
            'middleware' => '',
            'uri' => [
                [
                    'uri' => '',
                    'rules' => [],
                    'method' => '',
                    'function' => '',
                    'class' => '',
                    'key' => '',
                    'type' => '' // api, api

                ]
            ]
        ];
    }
}
