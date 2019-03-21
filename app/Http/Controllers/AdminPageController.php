<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOceanPorts\AddOceanPortsRequest;
use App\Http\Requests\OceanDeliveryPrice\OceanDeliveryPriceItemAddRequest;
use App\Models\Auction;
use App\Models\GroundDeliveryPrice;
use App\Models\GroundExitPort;
use App\Models\GroundLocation;
use App\Models\OceanDeliveryPrice;
use App\Models\OceanDestinationPort;
use App\Models\OceanExitPort;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPageController extends Controller
{
    private $routes;
    public function __construct()
    {
        //$this->middleware('auth');
        $this->routes = [
            "menuRoutes" => [
                ["name"=>"Create new ocean port", "link"=>route('showFormsAddOceanPorts')],
                ["name"=>"Ocean Delivery Price List", "link"=>route('oceanDeliveryPriceList')],
                ["name"=>"Add new Ground Delivery Price Item", "link"=>route('groundDeliveryPriceForm')],
                ["name"=>"Ground Delivery Price List", "link"=>route('groundDeliveryPriceList')],
            ],
            "callRoutes" => collect([
                "addOceanExitPort"=>route('addOceanExitPort'),
                "addOceanDestinationPort"=>route('addOceanDestinationPort'),
                "addGroundDeliveryPriceItem"=>route('addGroundDeliveryPriceItem'),
                "deleteGroundDeliveryPriceItem"=>route('deleteGroundDeliveryPriceItem'),
                "addGroundAuction"=>route('addGroundAuction'),
                "addGroundLocation"=>route('addGroundLocation'),
                "addGroundExitPort"=>route('addGroundExitPort'),
            ]),
        ];
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
    public function showFormsAddOceanPorts(OceanExitPort $exitPort, OceanDestinationPort $destinationPort):View
    {
        return view('admin.addNewOceanPorts',[
            "exitPorts" => $exitPort->all(),
            "destinationPorts" => $destinationPort->all(),
            "routes" => $this->routes,
        ]);
    }

    /**
     * @param \App\Http\Requests\AddOceanPorts\AddOceanPortsRequest $request
     * @param \App\Models\OceanExitPort $exitPort
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOceanExitPort(AddOceanPortsRequest $request,OceanExitPort $exitPort):JsonResponse
    {
        return response()->json([
            "status" => $exitPort->updateOrCreate(["name" => $request->name])
        ]);
    }

    /**
     * @param \App\Http\Requests\AddOceanPorts\AddOceanPortsRequest $request
     * @param \App\Models\OceanDestinationPort $destinationPort
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOceanDestinationPort(AddOceanPortsRequest $request,OceanDestinationPort $destinationPort):JsonResponse
    {
        return response()->json([
            "status" => $destinationPort->updateOrCreate(["name" => $request->name])
        ]);
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
            "destinationPorts" => $destinationPort->getAll(),
            "routes" => $this->routes,
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

    /**
     * @param \App\Models\Auction $auction
     * @param \App\Models\GroundLocation $location
     * @param \App\Models\GroundExitPort $exitPort
     * @return \Illuminate\View\View
     */
    public function groundDeliveryPriceList(Auction $auction, GroundLocation $location, GroundExitPort $exitPort):View
    {
        return view('admin.ground_delivery_price', [
            "data" => $auction->getAllWithPriceAndRelations(),
            "routes" => $this->routes,
            "auctions" => $auction->all(),
            "locations" => $location->all(),
            "exitPorts" => $exitPort->all(),
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GroundDeliveryPrice $deliveryPrice
     * @return \Illuminate\Http\JsonResponse
     */
    public function addGroundDeliveryPriceItem(Request $request, GroundDeliveryPrice $deliveryPrice):JsonResponse
    {
        return response()->json([
            "status" => $deliveryPrice->addOrUpdateItem($request->only(['auction_id','ground_location_id','ground_exit_port_id','price']))
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GroundDeliveryPrice $deliveryPrice
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteGroundDeliveryPriceItem(Request $request, GroundDeliveryPrice $deliveryPrice):JsonResponse
    {
        return response()->json([
            "status" => $deliveryPrice->deleteItem($request->only(['auction_id','ground_location_id','ground_exit_port_id']))
        ]);
    }

    /**
     * @param \App\Models\Auction $auction
     * @param \App\Models\GroundLocation $location
     * @param \App\Models\GroundExitPort $exitPort
     * @return \Illuminate\View\View
     */
    public function groundDeliveryPriceForm(Auction $auction, GroundLocation $location, GroundExitPort $exitPort):View
    {
        return view('admin.addNewGroundsDeliveryItems',[
            "routes" => $this->routes,
            "auctions" => $auction->all(),
            "locations" => $location->all(),
            "exitPorts" => $exitPort->all(),
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Auction $auction
     * @return \Illuminate\Http\JsonResponse
     */
    public function addGroundAuction(Request $request, Auction $auction):JsonResponse
    {
        return response()->json(["status" => (bool) $auction->create($request->only('name'))]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GroundLocation $location
     * @return \Illuminate\Http\JsonResponse
     */
    public function addGroundLocation(Request $request, GroundLocation $location):JsonResponse
    {
        return response()->json(["status" => (bool) $location->create($request->only('name'))]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GroundExitPort $exitPort
     * @return \Illuminate\Http\JsonResponse
     */
    public function addGroundExitPort(Request $request, GroundExitPort $exitPort):JsonResponse
    {
        return response()->json(["status" => (bool) $exitPort->create($request->only('name'))]);
    }
}
