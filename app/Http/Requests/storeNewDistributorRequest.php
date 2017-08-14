<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class storeNewDistributorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return Auth::user()->role == "admin";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|min:3",
            "phone" => "required|min:11|unique:distributors,phone",
            "location" => "required|min:3",
            "for_women" => "required|in:0,1",
        ];
    }
}
