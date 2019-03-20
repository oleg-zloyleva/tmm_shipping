<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroundLocation extends Model
{
    protected $fillable = ['name'];

    public function groundExitPorts(){
        return $this->belongsToMany(
            GroundExitPort::class,
            'ground_delivery_prices',
            "ground_location_id",
            "ground_exit_port_id"
        );
    }
}
