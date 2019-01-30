<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailNotification extends Controller
{
    //
    public function index(){
        return response()->json(["status" => "ok"]);
    }
}
