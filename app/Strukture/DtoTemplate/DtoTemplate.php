<?php

namespace App\Strukture\DtoTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class DtoTemplate  implements ClassSimpleTemplateInterface
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
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/DTO',
            'namespace' =>'App\Modules\V1\\'.$this->name.'\DTO',
            'use' => [
                'App\DTO\BaseDTO',
                'App\Modules\V1\\'.$this->name.'\Http\Requests\\'.$this->name.'CreateRequest'
            ],
            'class_name' => $this->name.'CreateDTO',
            'extends' => 'BaseDTO',
            'implements' => [],
            'traits' => [

            ],
            'properties' => [
            ],
            'functions' => [
                'public function __construct('.$this->name.'CreateRequest $request)
                {

                    parent::__construct($request);
                }'
            ],
            'annotations'=>[]
        ];
    }
}
