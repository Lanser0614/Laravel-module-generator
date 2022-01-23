<?php

namespace App\Strukture\HttpTemplate\ControllerTemplate;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class ControllerTemplate implements ClassSimpleTemplateInterface
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
            'directory' => app_path() .  '/Modules/V1/'.$this->name.'/Http/Controllers',
            'namespace' =>'App\Modules\V1\\'.$this->name.'\Http\Controllers',
            'use' => [
                'App\Http\Controllers\Controller',
                'App\Modules\V1\\'.$this->name.'\Repositories\Contracts\\'.'I'.$this->name.'ReadRepository',
                'App\Modules\V1\\'.$this->name.'\Repositories\Contracts\\'.'I'.$this->name.'WriteRepository',
            ],
            'class_name' => $this->name.'Controller',
            'extends' => 'Controller',
            'implements' => [],
            'traits' => [

            ],
            'properties' => [
                'protected $read',
                'protected $write'
            ],
            'functions' => [
                'public function __construct(I'.$this->name.'ReadRepository $read, I'.$this->name.'WriteRepository $write){
                    $this->read = $read;
                    $this->write = $write;
                }',
                'public function all('.$this->name.'GetAllDTO $request){
                    return new BranchGetAllCollection($this->read->get($request->getDTO()));
                }',
                'public function update(){}'
            ],
            'annotations'=>[]
        ];
    }
}
