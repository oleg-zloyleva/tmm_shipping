<?php

namespace App\Http\Controllers;

use App\Models\OceanDestinationPort;
use App\Models\OceanExitPort;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
        return view('pages.admin');
    }

    public function oceanDeliveryPriceList(OceanExitPort $exitPort, OceanDestinationPort $destinationPort){
        return view('admin.ocean_delivery_price',[
            "data" => $exitPort->getAllWithRelations(),
            "destinationPorts" => $destinationPort->getAll()
        ]);
    }


}
