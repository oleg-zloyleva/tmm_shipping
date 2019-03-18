<?php

namespace App\Http\Controllers;

use App\Http\Requests\Email\AirShippingOrderRequest;
use App\Http\Requests\Email\ContactUsRequest;
use App\Http\Requests\Email\OceanDeliveryPriceItemAddRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

use App\Mail\PdfFileToEmail;
use Barryvdh\DomPDF\Facade as PDF;


class EmailNotification extends Controller
{
    protected $pdf;
    protected $to;

    public function __construct(){
        $this->pdf = App::make('dompdf.wrapper');
        $this->to = 'info@tmminternational.com';
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function test(){
        $this->pdf->loadHTML('<h1>Test pdf letter !!!!</h1>');

        Mail::to($this->to)
            ->send(
                new PdfFileToEmail(
                    $this->pdf->stream(),
                    'mails.test',
                    "mail.pdf",
                    "Test letter"
                )
            );

        return response()->json(["status" => "ok"]);
    }

    /**
     * @param \App\Http\Requests\Email\ContactUsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function contactUs(ContactUsRequest $request){
        $this->pdf->loadView('pdf.contact_us', $request->all());

        Mail::to($this->to)
            ->send(
                new PdfFileToEmail(
                    $this->pdf->stream(),
                    "mails.contact_us",
                    "contact_us.pdf",
                    "Contact Us letter"
                )
            );

        return response()->json([
            "status" => "ok"
        ]);
    }

    /**
     * @param \App\Http\Requests\Email\OceanDeliveryPriceItemAddRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function quickQuote(OceanDeliveryPriceItemAddRequest $request){
        $this->pdf->loadView('pdf.quick_quote', $request->all());

        Mail::to($this->to)
            ->send(
                new PdfFileToEmail(
                    $this->pdf->stream(),
                    'mails.quick_quote',
                    "quick_quote.pdf",
                    "Quick Quote Letter"
                )
            );

        return response()->json([
            "status" => "ok"
        ]);
    }

    /**
     * @param \App\Http\Requests\Email\AirShippingOrderRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function airShippingOrder(AirShippingOrderRequest $request){
        $this->pdf->loadView('pdf.air_shipping_order', $request->all());
        Mail::to($this->to)
            ->send(
                new PdfFileToEmail(
                    $this->pdf->stream(),
                    'mails.air_shipping_order',
                    "air_shipping_order.pdf",
                    "Shipping Order Letter"
                )
            );

        return response()->json([
            "status" => "ok"
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function usspiForm(Request $request){
        $this->pdf->loadView('pdf.usspi_form', $request->all());
        Mail::to($this->to)
            ->send(
                new PdfFileToEmail(
                    $this->pdf->stream(),
                    'mails.usspi_form',
                    "usspi_form.pdf",
                    "Usspi Form Letter"
                )
            );

        return response()->json([
            "status" => "ok"
        ]);
    }
}
