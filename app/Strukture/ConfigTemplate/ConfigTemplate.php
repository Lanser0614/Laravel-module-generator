<?php

namespace App\Strukture\ConfigTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;
use TimeHunter\LaravelFileGenerator\Interfaces\RouteSimpleTemplateInterface;

class ConfigTemplate
implements ClassSimpleTemplateInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getTemplateData()
    {
        return [

            'class_type' => '',
            'directory' => app_path() .  '/Modules/V1/' . $this->name . '/config',
            'namespace' => '',
            'use' => [],
            'class_name' => 'config',
            'extends' => '',
            'implements' => [],
            'traits' => [],
            'properties' => [],
            'functions' => [
                'return [];'
            ],
            'annotations' => []
        ];
    }

}
