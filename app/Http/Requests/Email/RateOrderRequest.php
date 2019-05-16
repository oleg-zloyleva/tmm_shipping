<?php

namespace App\Http\Requests\Email;

use App\Http\Requests\Request;

class RateOrderRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ground' => 'required|array',
                'ground.auction' => 'string',
                'ground.location' => 'string',
                'ground.exitPort' => 'string',
                'ground.price' => 'string',

            'ocean' => 'required|array',
                'ocean.exitPort' => 'string',
                'ocean.destination' => 'string',
                'ocean.price' => 'string',

            'totalPrice' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required|string',
        ];
    }
}
