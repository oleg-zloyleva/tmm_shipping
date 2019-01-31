<?php

namespace App\Http\Requests\Email;

use App\Http\Requests\Request;

class ContactUsRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "FirstName" => "required|string|max:255",
            "SecondName" =>  "required|string|max:255",
            "Phone" =>  "required|string|max:255",
            "Email" =>  "required|string|email|max:255",
            "Message" =>  "string",
        ];
    }
}
