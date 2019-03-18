<?php

namespace App\Http\Requests\OceanDeliveryPrice;

use App\Http\Requests\Request;

class OceanDeliveryPriceItemAddRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "ocean_exit_port_id" => "required|integer",
            "ocean_destination_port_id" => "required|integer",
            "price" => "required|numeric",
        ];
    }
}
