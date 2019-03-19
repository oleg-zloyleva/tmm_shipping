<?php

namespace App\Http\Requests\AddOceanPorts;

use App\Http\Requests\Request;

class AddOceanPortsRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|string",
        ];
    }
}
