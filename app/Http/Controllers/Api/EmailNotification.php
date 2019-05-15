<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Email\ContactUsRequest;
use App\Http\Requests\Email\QuickQuoteRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Email\RateOrderRequest;
use App\Http\Requests\Email\ShipperOrderRequest;
use App\Mail\PdfFileToEmail;
use App\Models\Auction;
use App\Models\GroundDeliveryPrice;
use App\Models\GroundExitPort;
use App\Models\GroundLocation;
use App\Models\OceanDeliveryPrice;
use App\Models\OceanDestinationPort;
use App\Models\OceanExitPort;
use Illuminate\Support\Facades\Mail;

class EmailNotification extends Controller
{
    protected $to;

    public function __construct()
    {
        $this->to = 'info@tmminternational.com';
    }

    public function quickQuote(QuickQuoteRequest $request)
    {
        Mail::to($this->to)->queue(
            new PdfFileToEmail(
                'mails.quick_quote',
                'pdf.quick_quote',
                "quick_quote.pdf",
                "Quick Quote Letter",
                $request->input()
            )
        );

        return response()->json([
            "status" => "ok",
            "FreightType" => $request->FreightType,
            "Weight" => $request->Weight,
            "ShippingFrom" => $request->ShippingFrom,
            "ShippingTo" => $request->ShippingTo,
            "Email" => $request->Email,
            "Details" => $request->Details,
        ]);
    }

    public function contactUs(ContactUsRequest $request)
    {
        Mail::to($this->to)->queue(
            new PdfFileToEmail(
                "mails.contact_us",
                'pdf.contact_us',
                "contact_us.pdf",
                "Contact Us letter",
                $request->input()
            )
        );

        return response()->json([
            "status" => "ok",
            "FirstName" => $request->FirstName,
            "SecondName" => $request->SecondName,
            "Phone" => $request->Phone,
            "Email" => $request->Email,
            "Message" => $request->Message,
        ]);
    }

    public function rateOrder(RateOrderRequest $request)
    {
        $data = [
            'name' => $request->Name,
            'phone' => $request->Phone,
        ];

        if ($request->GroundAuctionId) {
            $data['groundAuction'] = Auction::findOrFail($request->GroundAuctionId)->name;
            $data['groundLocation'] = GroundLocation::findOrFail($request->GroundLocationId)->name;
            $data['groundExitPort'] = GroundExitPort::findOrFail($request->GroundExitPortId)->name;

            $data['groundPrice'] = GroundDeliveryPrice::query()->where([
                'auction_id' => $request->GroundAuctionId,
                'ground_location_id' => $request->GroundLocationId,
                'ground_exit_port_id' => $request->GroundExitPortId,
            ])->firstOrFail()->price;
        }

        if ($request->OceanExitPortId) {
            $data['oceanExitPort'] = OceanExitPort::findOrFail($request->OceanExitPortId)->name;
            $data['oceanDestinationPort'] = OceanDestinationPort::findOrFail($request->OceanDestinationPortId)->name;

            $data['oceanPrice'] = OceanDeliveryPrice::query()->where([
                'ocean_exit_port_id' => $request->OceanExitPortId,
                'ocean_destination_port_id' => $request->OceanDestinationPortId,
            ])->firstOrFail()->price;
        }

        Mail::to($this->to)->queue(
            new PdfFileToEmail(
                "mails.rate_order",
                'pdf.rate_order',
                "rate_order.pdf",
                "Rate Order letter",
                $data
            )
        );

        return response()->json([
            "status" => "ok",
            "GroundAuctionId" => $request->GroundAuctionId,
            "GroundLocationId" => $request->GroundLocationId,
            "GroundExitPortId" => $request->GroundExitPortId,
            "OceanExitPortId" => $request->OceanExitPortId,
            "OceanDestinationPortId" => $request->OceanDestinationPortId,
        ]);
    }

    public function shipperOrder(ShipperOrderRequest $request)
    {
        Mail::to($this->to)->queue(
            new PdfFileToEmail(
                "mails.shipper_order",
                'pdf.shipper_order',
                "shipper_order.pdf",
                "Shipper Order letter",
                $request->input()
            )
        );

        return response()->json([
            "status" => "ok",
        ]);
    }
}
