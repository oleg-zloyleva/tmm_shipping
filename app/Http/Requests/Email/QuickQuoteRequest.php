<?php

namespace App\Http\Requests\Email;

use App\Http\Requests\Request;

class QuickQuoteRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "FreightType" => "required|string|max:255",
            "Weight" => "required|string|max:255",
            "ShippingFrom" => "required|string|max:255",
            "ShippingTo" => "required|string|max:255",
            "Email" => "required|string|email|max:255",
            "Details" => "string",
        ];
    }
}
