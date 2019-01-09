<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class stockRequest extends FormRequest
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
         $id = $this->request->get('id');
        return [
            'product_name' => 'required|max:255|unique:product_stocks,name,'.$id,
            'category'     => 'required',
            'brand'        => 'required',
            'unit'         => 'required|max:255',
            'quantity'     => 'required|integer|min:0'
        ];
    }
    public function message()
    {       return[
            'product_name.required' => "Product name is required field",
            'product_name.unique' => "Product with these name already exist",
            'quantity.integer'    => "Please enter valid quantity",
            'category.required'   => "Category is rquired field",
            'brand.required'   => "Brand is rquired field",
            'quantity.required'   => "Quantity is rquired field"
            ];
    }
}
