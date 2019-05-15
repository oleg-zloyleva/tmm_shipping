<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Email\ContactUsRequest;
use App\Http\Requests\Email\QuickQuoteRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RateOrderRequest;
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
            'name' => $request->name,
            'phone' => $request->phone,
        ];

        if ($request->ground_auction_id) {
            $data['groundAuction'] = Auction::findOrFail($request->ground_auction_id)->name;
            $data['groundLocation'] = GroundLocation::findOrFail($request->ground_location_id)->name;
            $data['groundExitPort'] = GroundExitPort::findOrFail($request->ground_exit_port_id)->name;

            $data['groundPrice'] = GroundDeliveryPrice::query()->where([
                'auction_id' => $request->ground_auction_id,
                'ground_location_id' => $request->ground_location_id,
                'ground_exit_port_id' => $request->ground_exit_port_id,
            ])->firstOrFail()->price;
        }

        if ($request->ocean_exit_port_id) {
            $data['oceanExitPort'] = OceanExitPort::findOrFail($request->ocean_exit_port_id)->name;
            $data['oceanDestinationPort'] = OceanDestinationPort::findOrFail($request->ocean_destination_port_id)->name;

            $data['oceanPrice'] = OceanDeliveryPrice::query()->where([
                'ocean_exit_port_id' => $request->ocean_exit_port_id,
                'ocean_destination_port_id' => $request->ocean_destination_port_id,
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
            "ground_auction" => $request->ground_auction_id,
            "ground_location_id" => $request->ground_location_id,
            "ground_exit_port_id" => $request->ground_exit_port_id,
            "ocean_exit_port_id" => $request->ocean_exit_port_id,
            "ocean_destination_port_id" => $request->ocean_destination_port_id,
        ]);
    }
}
