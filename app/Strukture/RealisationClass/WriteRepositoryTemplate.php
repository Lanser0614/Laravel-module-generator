<?php

namespace App\Strukture\RealisationClass;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class WriteRepositoryTemplate implements ClassSimpleTemplateInterface
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
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/Repositories',
            'namespace' =>'App\Modules\V1\\'.$this->name.'\Repositories',
            'use' => [
                'App\Modules\V1\\'.$this->name.'\Repositories\Contracts\\'.'I'.$this->name.'WriteRepository',
                'App\Modules\V1\\'.$this->name.'\Models\\'.$this->name,
            ],
            'class_name' => $this->name.'WriteRepository',
            'extends' => '',
            'implements' => ['I'.$this->name.'WriteRepository'],
            'traits' => [

            ],
            'properties' => [
                'protected $model'
            ],
            'functions' => [
                'public function __construct('.$this->name.' $model){
                    $this->model = $model;
                }',
                'public function create(){}',
                'public function update(){}',
                'public function delete(){}',
            ],
            'annotations'=>[]
        ];
    }
}
