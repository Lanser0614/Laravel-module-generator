<?php

namespace App\Modules\V1\Employee\DTO;

use App\DTO\BaseDTO;
use App\Modules\V1\Employee\Http\Requests\EmployeeGetAllRequest;

/**
 */
class EmployeeGetAllDTO extends BaseDTO 
{

    public $perPage;
    public $page;

    public function __construct(EmployeeGetAllRequest $request)
                {
                    parent::__construct($request);
                }

    public function getDTO(){
                    if ($this->request->has("perPage")){
                        $this->perPage = $this->request->perPage;
                    }
                    if ($this->request->has("page")){
                        $this->page = $this->request->page;
                    }
                    return (array) $this;
                }

}

