<?php

namespace App\Modules\V1\Employee\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\V1\Employee\DTO\EmployeeGetAllDTO;
use App\Modules\V1\Branch\Http\Resources\BranchGetAllCollection;
use App\Modules\V1\Employee\Repositories\Contracts\IEmployeeReadRepository;
use App\Modules\V1\Employee\Repositories\Contracts\IEmployeeWriteRepository;

/**
 */
class EmployeeController extends Controller
{

    protected $read;
    protected $write;

    public function __construct(IEmployeeReadRepository $read, IEmployeeWriteRepository $write)
    {
        $this->read = $read;
        $this->write = $write;
    }

    public function all(EmployeeGetAllDTO $request)
    {
        return new BranchGetAllCollection($this->read->get($request->getDTO()));
    }

    public function update()
    {
    }
}
