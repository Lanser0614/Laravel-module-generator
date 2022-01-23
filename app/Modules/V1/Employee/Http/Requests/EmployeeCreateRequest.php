<?php

namespace App\Modules\V1\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 */
class EmployeeCreateRequest extends FormRequest
{


    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
