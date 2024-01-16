<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkplaceFormRequest extends FormRequest
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
            'address'=>'nullable',
            'city'=>'nullable',
            'state' => 'nullable',
            'postCode'=>'nullable',
            'country'=>'nullable',
            'workplaceCategory'=>'nullable',
            'organizationID'=>'nullable',
        ];
    }
    protected function prepareforValidation(){
        $this->merge([
            'address'=> strip_tags($this['address']),
            'city'=> strip_tags($this['city']),
            'state' => strip_tags($this['state']),
            'postCode'=> strip_tags($this['postCode']),
            'country'=> strip_tags($this['country']),
            'workplaceCategory'=> strip_tags($this['workplaceCategory']),
            'organizationID'=> strip_tags($this['organizationID']),
        ]);
    }
}
