<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class OceanDeliveryPrice extends Model
{
    protected $fillable = ['ocean_exit_port_id','ocean_destination_port_id','price'];

    public function destinationPorts(){
        return $this->belongsTo(OceanDestinationPort::class,'ocean_destination_port_id','id');
    }

    /**
     * @param $data
     * @return bool
     */
    public function addOrUpdateItem($data):bool
    {
        return (bool) $this->updateOrCreate(
            ['ocean_exit_port_id' => $data['ocean_exit_port_id'], 'ocean_destination_port_id' => $data['ocean_destination_port_id']],
            ['price' => $data['price']]
        );
    }
}
