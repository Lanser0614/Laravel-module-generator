<?php

namespace App\Strukture\HttpTemplate\ResourceTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class ResourceTemplate implements ClassSimpleTemplateInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function getTemplateData()
    {
        return [
            'class_type' => 'class',
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/Http/Resources',
            'namespace' =>'App\Module\V1\\'.$this->name.'\Http\Resources',
            'use' => [
                'Illuminate\Http\Resources\Json\JsonResource',
            ],
            'class_name' => $this->name.'Resources',
            'extends' => 'JsonResource',
            'implements' => [],
            'traits' => [

            ],
            'properties' => [

            ],
            'functions' => [
                '  public function toArray($request)
                {
                    return [
                       
                    ];
                }',
            ],
            'annotations'=>[]
        ];
    }
}
