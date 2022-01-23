<?php

namespace App\Module\V1\Branch\DTO;

use App\DTO\BaseDTO;
use App\Module\V1\Branch\Http\Requests\BranchGetAllRequest;

/**
 */
class BranchGetAllDTO extends BaseDTO 
{

    public $perPage;
    public $page;

    public function __construct(BranchGetAllRequest $request)
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

