<?php

namespace App\Strukture\InterfaceTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\InterfaceSimpleTemplateInterface;

class WriteInterfaceTemplate implements InterfaceSimpleTemplateInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function getTemplateData()
    {
        return [
            'directory' => app_path() . '/Modules/V1/'.$this->name.'/Repositories/Contracts',
            'interface_name' =>'I'.$this->name.'WriteRepository',
            'namespace' => 'App\Module\V1\\'.$this->name.'\Repositories\Contracts',
            'functions' => [
                'public function create()',
                'public function update()',
                'public function delete()',
            ],
            "annotations"=>[],

        ];
    }
}