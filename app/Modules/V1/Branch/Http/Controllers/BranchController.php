<?php

namespace App\Modules\V1\Branch\Http\Controllers;

use App\Http\Controllers\V1\BaseApiController;
use App\Modules\V1\Branch\DTO\BranchCreateDTO;
use App\Modules\V1\Branch\DTO\BranchGetAllDTO;
use App\Modules\V1\Branch\Http\Resources\BranchResource;
use App\Modules\V1\Branch\Http\Resources\BranchGetAllCollection;
use App\Modules\V1\Branch\Repositories\Contracts\IBranchReadRepository;
use App\Modules\V1\Branch\Repositories\Contracts\IBranchWriteRepository;

/**
 */
class BranchController extends BaseApiController
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
    public function show($id)
    {
        $data = $this->read->getByID($id);
        if ($data !== null) {
            return $this->responseWithData(new BranchResource($data));
        } else {
            return $this->responseWithMessage(404);
        }
    }
    public function create(BranchCreateDTO  $request)
    {
        $result = $this->write->create($request);
        if ($result["status"]) {
            return $this->responseWithData(new BranchResource($result["data"]), 201);
        } else {
            return $this->responseWithMessage(500);
        }
    }
    public function updateContent(BranchCreateDTO $request, $id)
    {
        $result = $this->write->updateContent($request, $id);
        if ($result["status"]) {
            return $this->responseWithData(new BranchResource($result["data"]), 202);
        } else {
            return $this->responseWithMessage(500);
        }
    }
    public function delete($id)
    {
        $result = $this->write->delete($id);
        if ($result["status"]) {
            return $this->responseWithMessage(202);
        } else {
            return $this->responseWithMessage(500);
        }
    }
}
