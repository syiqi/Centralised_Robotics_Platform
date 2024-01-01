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
            'phoneNo'=>'nullable',
            'email'=>'nullable',
            'website'=>'nullable',
            'category'=>'nullable',
            //if somehow wants to add new field for ministry
        ];
    }

    protected function prepareforValidation(){
        $this->merge([
            'name'=> strip_tags($this['name']),
            'phoneNo'=> strip_tags($this['phoneNo']),
            'email'=> strip_tags($this['email']),
            'website'=> strip_tags($this['website']),
            'category'=> strip_tags($this['category']),
        ]);
    }
}
