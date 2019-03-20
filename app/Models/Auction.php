<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = ['name'];


    public function groundDeliveryPrices(){
        return $this->hasMany(GroundDeliveryPrice::class,"auction_id","id");
    }


    public function getAllWithPriceAndRelations(){
        $result = [];
        $data = $this->select(
            'auctions.id as auction_id', 'auctions.name as auction_name',
            'ground_locations.id as ground_location_id', 'ground_locations.name as ground_location_name',
            'ground_exit_ports.id as ground_exit_port_id', 'ground_exit_ports.name as ground_exit_port_name',
            'ground_delivery_prices.price'
        )
            ->crossJoin('ground_locations')
            ->crossJoin('ground_exit_ports')
            ->leftJoin('ground_delivery_prices',function ($join){
                $join->on('auctions.id', '=','auction_id');
                $join->on('ground_locations.id', '=','ground_location_id');
                $join->on('ground_exit_ports.id', '=','ground_exit_port_id');
            })
            ->get();

        foreach ($data as $item){
            //$result[$item->auction_id][$item->ground_location_id][$item->ground_exit_port_id] = [
            //    'data' => $item,
            //];
            $result[$item->auction_id]["auction"] = [
                "id" => $item->auction_id,
                "name" => $item->auction_name,
            ];

            $result[$item->auction_id]['ground_location'][$item->ground_location_id]['item'] = [
                "id" => $item->ground_location_id,
                "name" => $item->ground_location_name,
            ];

            $result[$item->auction_id]['ground_location'][$item->ground_location_id]['ground_exit_port'][$item->ground_exit_port_id] = [
                "id" => $item->ground_exit_port_id,
                "name" => $item->ground_exit_port_name,
                "price" => $item->price,
                "data" => $item
            ];
        }
        return collect($result);
    }
}
