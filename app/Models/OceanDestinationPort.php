<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OceanDestinationPort extends Model
{
    protected $fillable = ['name'];

    public function getAll(){
        return $this->all();
    }
}
