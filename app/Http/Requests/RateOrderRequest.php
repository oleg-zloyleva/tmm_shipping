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
            'GroundAuctionId' => 'integer|min:1',
            'GroundLocationId' => 'required_with:GroundAuctionId|integer|min:1',
            'GroundExitPortId' => 'required_with:GroundLocationId|integer|min:1',
            'OceanExitPortId' => 'required_without:GroundAuctionId|integer|min:1',
            'OceanDestinationPortId' => 'required_with:OceanExitPortId|integer|min:1',
            'Phone' => 'required|string',
            'Name' => 'required|string',
        ];
    }
}
