<?php

namespace App\Strukture\RouteTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class RouteTemplate implements ClassSimpleTemplateInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function getTemplateData()
    {
        return [
            'class_type' => '',
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/routes',
            'namespace' =>'',
            'use' => [

            ],
            'class_name' => 'route',
            'extends' => '',
            'implements' => [],
            'traits' => [

            ],
            'properties' => [

            ],
            'functions' => [
                ''
            ],
            'annotations'=>[]
        ];
    }
}
