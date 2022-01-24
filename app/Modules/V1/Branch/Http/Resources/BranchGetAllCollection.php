<?php

namespace App\Modules\V1\Branch\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Modules\V1\Branch\Http\Resources\BranchResource;

/**
 */
class BranchGetAllCollection extends ResourceCollection
{



    public function toArray($request): array
    {
        return [
            "message" => "success",
            "data" => BranchResource::collection($this->collection)
        ];
    }
}
