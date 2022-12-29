<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamMemberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'order' => ['required', 'numeric', 'min:1', 'unique:team_members,order,' . $this->member],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
