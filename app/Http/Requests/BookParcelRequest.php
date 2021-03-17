<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookParcelRequest extends FormRequest
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
            "user_id"=> "required|intege",
            "company_id"=>"required|intege",
            "parcelTrackCode"=> "required|string",
            "parcelNote"=> "required|string",
            "parcelName"=>"required|string",
            "parcelWeight"=> "integer|nullable",
            "fee"=>"required|intege",
            "bookedDate"=> "372GTY274",
            "parcelFrom"=> "required|string",
            "ParcelTo"=>"required|string",
            "senderName"=> "required|string",
            "senderEmail"=> "email|nullable",
            "senderNationalID"=>  "required|integer",
            "senderPhoneNumber"=> "required|string",
            "senderAltPhoneNumber"=>"string|nullable",
            "receipientsName"=>  "required|string",
            "receipientsEmail"=>"email|nullable",
            "receipientsNationalID"=> "requited|integer",
            "receipientsPhoneNumber"=>"required|string",
            "receipientsAltPhoneNumber"=> "string|nullable",
        ];
    }

    public function messages()
    {
        // return [
        //     'email.required' => 'Email is required!',
        //     'password.required' => 'Password is required!'
        // ];
    }


}
