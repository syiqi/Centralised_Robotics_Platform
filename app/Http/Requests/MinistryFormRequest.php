<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MinistryFormRequest extends FormRequest
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
            'name' => 'required',
            'phoneNo' => 'nullable',
            'email' => 'nullable',
            'website' => 'nullable',
            'category' => 'nullable',

            'address' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'postCode' => 'nullable',
            'country' => 'nullable',
            'workplaceCategory' => 'nullable',
            //if somehow wants to add new field for ministry
        ];
    }

    protected function prepareforValidation()
    {
        $this->merge([
            'name' => strip_tags($this['name']),
            'phoneNo' => strip_tags($this['phoneNo']),
            'email' => strip_tags($this['email']),
            'website' => strip_tags($this['website']),
            'category' => strip_tags($this['category']),

            'address' => strip_tags($this['address']),
            'city' => strip_tags($this['city']),
            'state' => strip_tags($this['state']),
            'postCode' => strip_tags($this['postCode']),
            'country' => strip_tags($this['country']),
            'workplaceCategory' => strip_tags($this['workplaceCategory']),
        ]);
    }
}
