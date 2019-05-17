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
    public function quickQuote(QuickQuoteRequest $request)
    {
        Mail::send(
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
        Mail::send(
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
        Mail::send(
            new PdfFileToEmail(
                "mails.rate_order",
                'pdf.rate_order',
                "rate_order.pdf",
                "Rate Order letter",
                $request->input()
            )
        );

        return response()->json([
            "status" => "ok",
        ]);
    }

    public function shipperOrder(ShipperOrderRequest $request)
    {
        Mail::send(
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
