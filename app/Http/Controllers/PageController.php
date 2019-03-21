<?php

namespace App\Http\Controllers;

use App\Models\GroundDeliveryPrice;
use App\Models\OceanExitPort;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $page;

    public function __construct(){
        $this->page = [
            "home" => "",
            "about" => "",
            "services" => "",
            "rates" => "",
            "contacts" => "",
            "order" => "",
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $this->page["home"] = "active";
        return view('pages.home', ["page" => $this->page]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about(){
        $this->page["about"] = "active";
        return view('pages.about', ["page" => $this->page]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function services(){
        $this->page["services"] = "active";
        return view('pages.services', ["page" => $this->page]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rates(OceanExitPort $exitPort, GroundDeliveryPrice $deliveryPrice){
        $this->page["rates"] = "active";
        return view('pages.rates', [
            "page" => $this->page,
            "dataOcean" => $exitPort->getAllWithRelations(),
            "dataGround" => $deliveryPrice->getPriceWithRelationsToSite(),
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contacts(){
        $this->page["contacts"] = "active";
        return view('pages.contacts', ["page" => $this->page]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function order(){
        $this->page["order"] = "active";
        return view('pages.order', ["page" => $this->page]);
    }
}
