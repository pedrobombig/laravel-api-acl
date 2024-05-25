<?php

namespace App\Http\Requests\Api;

class UpdatePermissionRequest extends StorePermissionRequest
{
    public function rules(): array
    {
        $rules = parent::rules();

        return $rules;
    }
}
