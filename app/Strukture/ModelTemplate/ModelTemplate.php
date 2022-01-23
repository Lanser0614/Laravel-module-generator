<?php

namespace App\Strukture\ModelTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class ModelTemplate  implements ClassSimpleTemplateInterface
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
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/Models',
            'namespace' =>'App\Modules\V1\\'.$this->name.'\Models',
            'use' => [
                'Illuminate\Database\Eloquent\Model;',
            ],
            'class_name' => $this->name,
            'extends' => 'Model',
            'implements' => [],
            'traits' => [

            ],
            'properties' => [
                'protected $table ',
                'protected $connection  ',
                'protected $fillable = [  ]'

            ],
            'functions' => [
            ],
            'annotations'=>[]
        ];
    }
}
