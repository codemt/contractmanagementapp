<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignStockFromReadyProducts extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'order_taken_by'         => 'required',
            'product_name'           => 'required'
        ];
    }

      /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'order_taken_by.required' => 'Order Taken By is mandatory',
            'product_name.required'   => 'Product Name is Required'  
    
        ];
    }



}
