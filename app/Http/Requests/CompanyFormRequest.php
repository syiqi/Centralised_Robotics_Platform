<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyFormRequest extends FormRequest
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

            'registrationNo' => 'nullable',
            'companyMainSector' => 'nullable',
            'primaryMSIC2008' => 'nullable',
            'secondaryMSIC2008' => 'nullable',
            'tertiaryMSIC2008' => 'nullable',
            'natureOfActivity' => 'nullable',
            'financeYearCalendar' => 'nullable',
            'latestRevenue' => 'nullable',
            'latestNoEmployee' => 'nullable',
            'staEcosystem' => 'nullable',
            'productAndService' => 'nullable',

            'address' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'postCode' => 'nullable',
            'country' => 'nullable',
            'workplaceCategory' => 'nullable',
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

            'registrationNo' => strip_tags($this['registrationNo']),
            'companyMainSector' => strip_tags($this['companyMainSector']),
            'primaryMSIC2008' => strip_tags($this['primaryMSIC2008']),
            'secondaryMSIC2008' => strip_tags($this['secondaryMSIC2008']),
            'tertiaryMSIC2008' => strip_tags($this['tertiaryMSIC2008']),
            'natureOfActivity' => strip_tags($this['natureOfActivity']),
            'financeYearCalendar' => strip_tags($this['financeYearCalendar']),
            'latestRevenue' => strip_tags($this['latestRevenue']),
            'latestNoEmployee' => strip_tags($this['latestNoEmployee']),
            'staEcosystem' => json_encode($this['staEcosystem']),
            'productAndService' => strip_tags($this['productAndService']),

            'address' => strip_tags($this['address']),
            'city' => strip_tags($this['city']),
            'state' => strip_tags($this['state']),
            'postCode' => strip_tags($this['postCode']),
            'country' => strip_tags($this['country']),
            'workplaceCategory' => strip_tags($this['workplaceCategory']),
        ]);
    }
}
