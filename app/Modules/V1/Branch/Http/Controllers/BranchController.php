<?php

namespace App\Modules\V1\Branch\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\V1\Branch\DTO\BranchGetAllDTO;
use App\Modules\V1\Branch\Http\Resources\BranchGetAllCollection;
use App\Modules\V1\Branch\Repositories\Contracts\IBranchReadRepository;
use App\Modules\V1\Branch\Repositories\Contracts\IBranchWriteRepository;

/**
 */
class BranchController extends Controller
{

    protected $read;
    protected $write;

    public function __construct(IBranchReadRepository $read, IBranchWriteRepository $write)
    {
        $this->read = $read;
        $this->write = $write;
    }

    public function all(BranchGetAllDTO $request)
    {
        return new BranchGetAllCollection($this->read->get($request->getDTO()));
    }

    public function update()
    {
    }
}
