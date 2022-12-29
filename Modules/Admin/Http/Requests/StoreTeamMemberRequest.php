<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamMemberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'order' => ['required', 'numeric', 'min:1', 'unique:team_members'],
            'picture' => ['required', 'image'],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
