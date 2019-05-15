<?php

namespace App\Http\Requests;

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
            'ground_auction_id' => 'integer|min:1',
            'ground_location_id' => 'required_with:ground_auction_id|integer|min:1',
            'ground_exit_port_id' => 'required_with:ground_location_id|integer|min:1',
            'ocean_exit_port_id' => 'required_without:ground_auction_id|integer|min:1',
            'ocean_destination_port_id' => 'required_with:ocean_exit_port_id|integer|min:1',
            'phone' => 'required|string',
            'name' => 'required|string',
        ];
    }
}
