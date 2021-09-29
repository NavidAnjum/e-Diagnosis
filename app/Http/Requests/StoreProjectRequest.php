<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name_of_medicine'=>'required|max:255',
            'brand'=>'required|max:255',
            'price'=>'required|max:255',
            'generic'=>'required|max:255',
            'type'=>'required|max:100',
            'quantity'=>'required|100',
            'dose'=>'required|100'
        ];
    }

    public function messages()
    {
        return [
            'name_of_medicine.required'=>'You need to provide the name of medicine',
            'brand.required'=>'You need to provide the brand of medicine',
            'price.required'=>'you need to provide the price of medicine',
            'generic.required'=>'You need to provided the generic of medicine',
            'type.required'=>'you need to provide type type of medicine',
            'quantity.required'=>'Please provide quantity',
            'dose.required'=>'Please provide dose'

        ];
    }
}
