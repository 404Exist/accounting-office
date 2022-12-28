<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContactMessageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $subject_values = implode(",", [
            "Usługach księgowych",
            "Doradztwie podatkowym",
            "Pomocy w założeniu firmy",
            "Usłudze Wirtualnego Biura",
            "Rozliczeniu PIT",
            "Współpracy",
            "Reklamacji",
            "Innej sprawie",
        ]);

        return [
            "name" => ["required", "string", "max:255"],
            "phone" => ["required", "string", "max:255"],
            "email" => ["required", "email", "max:255"],
            "subject" => ["required", "string", "in:$subject_values"],
            "message" => ["required", "string"],
        ];
    }

    public function messages()
    {
        return [
            'required' => getText('field_is_required'),
            'string' => getText('field_must_be_string'),
            'max' => getText('field_max'),
            'in' => getText('selected_field_is_invaild'),
            'email' => getText('field_must_be_email'),
        ];
    }
}
