<?php

namespace App\Http\Controllers;

use App\Http\Requests\OceanDeliveryPrice\OceanDeliveryPriceItemAddRequest;
use App\Models\OceanDeliveryPrice;
use App\Models\OceanDestinationPort;
use App\Models\OceanExitPort;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPageController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index():View
    {
        return view('pages.admin');
    }

    /**
     * @param \App\Models\OceanExitPort $exitPort
     * @param \App\Models\OceanDestinationPort $destinationPort
     * @return \Illuminate\View\View
     */
    public function oceanDeliveryPriceList(OceanExitPort $exitPort, OceanDestinationPort $destinationPort):View
    {
        return view('admin.ocean_delivery_price',[
            "data" => $exitPort->getAllWithRelations(),
            "destinationPorts" => $destinationPort->getAll()
        ]);
    }

    /**
     * @param \App\Http\Requests\OceanDeliveryPrice\OceanDeliveryPriceItemAddRequest $request
     * @param \App\Models\OceanDeliveryPrice $deliveryPrice
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOceanDeliveryPriceItem(OceanDeliveryPriceItemAddRequest $request, OceanDeliveryPrice $deliveryPrice):JsonResponse
    {
        return response()->json(["status" => $deliveryPrice->addOrUpdateItem($request)]);
    }

    /**
     * @param $item_id
     * @param \App\Models\OceanDeliveryPrice $deliveryPrice
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteOceanDeliveryPriceItem(int $item_id, OceanDeliveryPrice $deliveryPrice):JsonResponse
    {
        return response()->json([
            "status" => (bool) $deliveryPrice->destroy($item_id)
        ]);
    }
}
