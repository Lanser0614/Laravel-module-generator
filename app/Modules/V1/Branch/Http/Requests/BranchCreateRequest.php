<?php

namespace App\Modules\V1\Branch\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 */
class BranchCreateRequest extends FormRequest
{



    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
        ];
    }
}
