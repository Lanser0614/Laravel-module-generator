<?php

namespace App\Module\V1\Branch\Controllers;

use App\Http\Controllers\Controller;
use App\Module\V1\Branch\Repositories\Contracts\IBranchReadRepository;
use App\Module\V1\Branch\Repositories\Contracts\IBranchWriteRepository;

/**
 */
class BranchController extends Controller 
{

    protected $read;
    protected $write;

    public function __construct(IBranchReadRepository $read, IBranchWriteRepository $write){
                    $this->read = $read;
                    $this->write = $write;
                }

    public function all(BranchGetAllDTO $request){
                    return new BranchGetAllCollection($this->branchReadRepository->get($request->getDTO()));
                }

    public function update(){}

}

