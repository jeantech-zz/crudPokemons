<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerUpdateRequest extends FormRequest
{

    public function authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            'id' => 'required',
            'name' => 'required',
            'character_id' => 'required',
        ];
    }
}
