<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroundDeliveryPrice extends Model
{
    protected $fillable = ['auction_id', 'ground_location_id', 'ground_exit_port_id', 'price'];
}
