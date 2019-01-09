<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>'required|regex:/[0-9]{10}/',
            'email'=>'required|unique:users,email',
        ];
    }
    public function message()
    {       return[
            'name.required'  => "Client name is required field",
            'phone.required' => "Phone number is required field",
            'phone.regex'    => "please enter valid phone number",
            'email.required' => "Email is Required Field",
            'email.unique'   => "Email already in use",
            ];
    }
}
