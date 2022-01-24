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
                'App\Http\Controllers\V1\BaseApiController',
                'App\Modules\V1\\'.$this->name.'\Repositories\Contracts\\'.'I'.$this->name.'ReadRepository',
                'App\Modules\V1\\'.$this->name.'\Repositories\Contracts\\'.'I'.$this->name.'WriteRepository',
            ],
            'class_name' => $this->name.'Controller',
            'extends' => 'BaseApiController',
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
                    return new '.$this->name.'GetAllCollection($this->read->get($request->getDTO()));
                }',
                'public function show($id){
                    $data = $this->read->getByID($id);
                    if ($data !== null){
                        return $this->responseWithData(new '.$this->name.'Resource($data));
                    }else{
                        return $this->responseWithMessage(404);
                    }
                }',
                '  public function create('.$this->name.'CreateDTO  $request){
                    $result = $this->write->create($request);
                    if ($result["status"]){
                        return $this->responseWithData(new '.$this->name.'Resource($result["data"]),201);
                    }else{
                        return $this->responseWithMessage(500);
                    }
                }',
                'public function updateContent('.$this->name.'CreateDTO $request,$id){
                    $result = $this->write->updateContent($request, $id);
                    if ($result["status"]){
                        return $this->responseWithData(new BranchResource($result["data"]),202);
                    }else{
                        return $this->responseWithMessage(500);
                    }
                 }',
                 '  public function delete($id){
                    $result = $this->write->delete($id);
                    if ($result["status"]){
                        return $this->responseWithMessage(202);
                    }else{
                        return $this->responseWithMessage(500);
                    }
                }'
            ],
            'annotations'=>[]
        ];
    }
}
