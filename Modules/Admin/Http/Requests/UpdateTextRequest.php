<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTextRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pl_text' => ['required', 'string'],
            'en_text' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
