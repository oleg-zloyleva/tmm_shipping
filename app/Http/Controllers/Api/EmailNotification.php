<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Email\ContactUsRequest;
use App\Http\Requests\Email\QuickQuoteRequest;
use App\Http\Controllers\Controller;
use App\Mail\PdfFileToEmail;
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
}
