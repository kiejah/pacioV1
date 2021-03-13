<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'fname' => 'required|string|max:50',
            'fname' => 'required|string|max:50',
            'phonenumber' => 'required|string|max:50',
            'prof_thumbnail' => 'required|url|',
            'role_id' => 'integer|nullable',
            'branch_id' => 'integer|nullable',
            'company_id' => 'integer|nullable',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'name.required' => 'Name is required!',
            'password.required' => 'Password is required!'
        ];
    }


    public function filters()
    {
        return [
            'email' => 'trim|lowercase',
            'fname' => 'trim|capitalize|escape',
            'lname' => 'trim|capitalize|escape',
        ];
    }


}
