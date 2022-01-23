<?php

namespace App\Strukture\DtoTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class GetAllDtoTemplate implements ClassSimpleTemplateInterface
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
                'App\Modules\V1\\'.$this->name.'\Http\Requests\\'.$this->name.'GetAllRequest'
            ],
            'class_name' => $this->name.'GetAllDTO',
            'extends' => 'BaseDTO',
            'implements' => [],
            'traits' => [

            ],
            'properties' => [
                'public $perPage',
                'public $page',
            ],
            'functions' => [
                'public function __construct('.$this->name.'GetAllRequest $request)
                {
                    parent::__construct($request);
                }',
                'public function getDTO(){
                    if ($this->request->has("perPage")){
                        $this->perPage = $this->request->perPage;
                    }
                    if ($this->request->has("page")){
                        $this->page = $this->request->page;
                    }
                    return (array) $this;
                }'
            ],
            'annotations'=>[]
        ];
    }
}
