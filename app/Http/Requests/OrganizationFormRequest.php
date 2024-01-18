<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationFormRequest extends FormRequest
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
            // 'providerName' =>'required',
            // 'providerEmail' =>'required',
            // 'providerPhoneNo' =>'required',
            // 'registerNo' =>'required',
            // 'providerDescription' =>'required',
            // 'providerWare' =>'required',
            // 'providerSpecialization' =>'required',
            // 'providerCategory' =>'required',
            // 'providerURL'=> 'nullable',
            // 'providerRobotType' =>'required',
            // 'providerAddress' =>'required',
            // 'providerCity' =>'required',
            // 'providerState' =>'required',
            // 'providerPostcode' =>'required',
            // 'providerCountry' =>'required',

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
            // 'providerName'=> strip_tags($this['providerName']),
            // 'providerEmail'=> strip_tags($this['providerEmail']),
            // 'providerPhoneNo'=> strip_tags($this['providerPhoneNo']),
            // 'registerNo'=> strip_tags($this['registerNo']),
            // 'providerDescription'=> strip_tags($this['providerDescription']),
            // 'providerWare'=>json_encode($this['providerWare']),
            // 'providerSpecialization'=> strip_tags($this['providerSpecialization']),
            // 'providerCategory'=>json_encode($this['providerCategory']),
            // 'providerURL'=> strip_tags($this['providerURL']),
            // 'providerRobotType'=>json_encode($this['providerRobotType']),
            // 'providerAddress'=> strip_tags($this['providerAddress']),
            // 'providerCity'=> strip_tags($this['providerCity']),
            // 'providerState'=> strip_tags($this['providerState']),
            // 'providerPostcode'=> strip_tags($this['providerPostcode']),
            // 'providerCountry'=> strip_tags($this['providerCountry']),
        ]);
    }
}
