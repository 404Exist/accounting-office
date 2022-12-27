<?php

namespace Modules\Admin\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AdminResetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'token' => 'required',
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}
