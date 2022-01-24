<?php

namespace App\Strukture\RealisationClass;

use TimeHunter\LaravelFileGenerator\Interfaces\ClassSimpleTemplateInterface;

class WriteRepositoryTemplate implements ClassSimpleTemplateInterface
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
            'directory' => app_path() .  '/Modules/V1/' . $this->name . '/Repositories',
            'namespace' => 'App\Modules\V1\\' . $this->name . '\Repositories',
            'use' => [
                'App\Modules\V1\\' . $this->name . '\Repositories\Contracts\\' . 'I' . $this->name . 'WriteRepository',
                'App\Modules\V1\\' . $this->name . '\Models\\' . $this->name,
            ],
            'class_name' => $this->name . 'WriteRepository',
            'extends' => '',
            'implements' => ['I' . $this->name . 'WriteRepository'],
            'traits' => [],
            'properties' => [
                'protected $model'
            ],
            'functions' => [
                'public function __construct(' . $this->name . ' $model){
                    $this->model = $model;
                }',
                'public function create($data){$'.$this->name.' =  $this->model::create($data->getBranch()); return ["status" => true, "data" => $'.$this->name.'];}',

                'public function updateContent($data, $id){
                    $' . $this->name . ' = $this->model::all()->find($id);
                    if ($' . $this->name . ') {
                        $'.$this->name.'->update($data->getBranch());
                        return ["status" => true, "data" => $'.$this->name.'];
                    }
                }',

                'public function delete($id){
                    $' . $this->name . ' = $this->model::all()->find($id);
                     if ($' . $this->name . ') {
                    $'.$this->name.'->delete();
                    return ["status" => true];
                    }
                }',

            ],
            'annotations' => []
        ];
    }
}
