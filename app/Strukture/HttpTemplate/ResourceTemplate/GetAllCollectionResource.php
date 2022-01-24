<?php

namespace App\Strukture\HttpTemplate\ResourceTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class GetAllCollectionResource implements ClassSimpleTemplateInterface
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getTemplateData()
    {
        return [
            'class_type' => 'class',
            'directory' => app_path() .  '/Modules/V1/' . $this->name . '/Http/Resources',
            'namespace' => 'App\Modules\V1\\' . $this->name . '\Http\Resources',
            'use' => [
                'Illuminate\Http\Resources\Json\ResourceCollection',
            ],
            'class_name' => $this->name . 'GetAllCollection',
            'extends' => 'ResourceCollection',
            'implements' => [],
            'traits' => [],
            'properties' => [],
            'functions' => [
                '  public function toArray($request): array
                {
                    return [
                        "message" => "success",
                        "data" => '.$this->name.'Resource::collection($this->collection)
                    ];

                }',
            ],
            'annotations' => []
        ];
    }
}
