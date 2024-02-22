<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonellFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'personName' => 'required',
            'personPosition' => 'nullable',
            'personJobTitle' => 'nullable',
            'personDeptDiv' => 'nullable',
            'personEmail' => 'nullable',
            'personNumber' => 'nullable',
            'personGender' => 'nullable',
            'organizationID' => 'nullable',
        ];
    }

    protected function prepareforValidation()
    {
        $this->merge([
            'personName' => strip_tags($this['personName']),
            'personPosition' => strip_tags($this['personPosition']),
            'personJobTitle' => strip_tags($this['personJobTitle']),
            'personDeptDiv' => strip_tags($this['personDeptDiv']),
            'personEmail' => strip_tags($this['personEmail']),
            'personNumber' => strip_tags($this['personNumber']),
            'personGender' => strip_tags($this['personGender']),
            'organizationID' => strip_tags($this['organizationID']),
        ]);
    }
}
