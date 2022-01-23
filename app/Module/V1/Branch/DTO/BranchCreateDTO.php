<?php

namespace App\Module\V1\Branch\DTO;

use App\DTO\BaseDTO;
use App\Module\V1\Branch\Http\Requests\BranchCreateRequest;

/**
 */
class BranchCreateDTO extends BaseDTO 
{


    public function __construct(BranchCreateRequest $request)
                {

                    parent::__construct($request);
                }

}

