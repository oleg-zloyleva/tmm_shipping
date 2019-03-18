<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OceanExitPort extends Model
{
    protected $fillable = ['name'];

    public function prices(){
        return $this->hasMany(OceanDeliveryPrice::class);
    }

    public function getAllWithRelations(){
        return $this->with([
            'prices' => function($q){
                //return $q->join('ocean_destination_ports','ocean_destination_ports.id','ocean_delivery_prices.ocean_destination_port_id');
                return $q->with('destinationPorts');
            }
        ])->get();
    }
}
