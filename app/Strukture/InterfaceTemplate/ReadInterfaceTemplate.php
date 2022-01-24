<?php

namespace App\Strukture\InterfaceTemplate;
use TimeHunter\LaravelFileGenerator\Interfaces\InterfaceSimpleTemplateInterface;

class ReadInterfaceTemplate implements InterfaceSimpleTemplateInterface
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
            'interface_name' =>'I'.$this->name.'ReadRepository',
            'namespace' => 'App\Modules\V1\\'.$this->name.'\Repositories\Contracts',
            'functions' => [
                'public function get($data)',
                'public function getByID($id)'
            ],
            "annotations"=>[],

        ];
    }


}
