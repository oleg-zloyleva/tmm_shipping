<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class OceanDeliveryPrice extends Model
{
    public function oceanExitPorts(){
        return $this->belongsTo(OceanExitPort::class,"ocean_exit_port_id");
    }

    public function oceanDestinationPorts(){
        return $this->belongsTo(OceanDestinationPort::class,"ocean_destination_port_id");
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function allWithRelations():Collection
    {
        return $this->with('oceanExitPorts','oceanDestinationPorts')->get();
    }
}
