<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_initial' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'string'],
            'sex' => ['required', 'string'],
            'age' => ['required'],
            'religion' => ['required'],
            'nationality' => ['required'],
            'nickname' => ['required'],
            'home_no' => ['required'],
            'home_address' => ['required'],
            'occupation' => ['required'],
            'dental_insurance' => ['required']
        ];
    }
}
