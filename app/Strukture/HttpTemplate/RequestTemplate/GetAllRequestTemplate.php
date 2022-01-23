<?php

namespace App\Strukture\HttpTemplate\RequestTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class GetAllRequestTemplate implements ClassSimpleTemplateInterface
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
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/Http/Requests',
            'namespace' =>'App\Modules\V1\\'.$this->name.'\Http\Requests',
            'use' => [
                'Illuminate\Foundation\Http\FormRequest',
            ],
            'class_name' => $this->name.'GetAllRequest',
            'extends' => 'FormRequest',
            'implements' => [],
            'traits' => [

            ],
            'properties' => [

            ],
            'functions' => [
                'public function authorize(): bool
                {
                    return true;
                }',
                ' public function rules()
                {
                    return [

                    ];
                }',

            ],
            'annotations'=>[]
        ];
    }
}
