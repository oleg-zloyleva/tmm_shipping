<?php

namespace App\Api\V1\Controllers;

use App\Http\Requests\Email\AirShippingOrderRequest;
use App\Http\Requests\Email\ContactUsRequest;
use App\Http\Requests\Email\QuickQuoteRequest;
use App\Mail\ContactUsEmail;
use App\Mail\QuickQouteEmail;
use App\Mail\TestEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

use Barryvdh\DomPDF\Facade as PDF;

/**
 * @SWG\Post(
 *     path="/api/email/test",
 *     summary="Send test email",
 *     @SWG\Response(
 *         response=200,
 *         description="successful operation"
 *     ),
 *     @SWG\Response(
 *         response="401",
 *         description="Unauthorized user",
 *     ),
 *     tags={"Emails"},
 * )
 */

class EmailNotification extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function test(){
        $pdf = PDF::loadHTML("<div>PDF pdf</div>")->setPaper('a4', 'landscape')->setWarnings(false);
        $pdf->save('pdf/myfile.pdf');

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test pdf letter</h1>');

        Mail::to("test@test.com")->send(new TestEmail($pdf->stream()));

        return response()->json(["status" => "ok"]);
    }

    /**
     * @param \App\Http\Requests\Email\ContactUsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function contactUs(ContactUsRequest $request){

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.contact_us', $request->all());

        Mail::to("test@test.com")->send(new ContactUsEmail($pdf->stream()));

        return response()->json([
            "status" => "ok",
            "requestFirstName" => $request->FirstName,
            "requestSecondName" => $request->SecondName,
            "requestPhone" => $request->Phone,
            "requestEmail" => $request->Email,
            "requestMessage" => $request->Message??"",
        ]);
    }

    public function quickQuote(QuickQuoteRequest $request){

        Mail::to("test@test.com")->send(new QuickQouteEmail());

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

    public function airShippingOrder(AirShippingOrderRequest $request){
        return response()->json([
            "status" => "ok",
            "comment" => $request->comment,
            "consignee" => $request->consignee,
            "descriptionOfGoods" => $request->descriptionOfGoods,
            "notifyParty" => $request->notifyParty,
            "sendDocumentTo" => $request->sendDocumentTo,
            "shipper" => $request->shipper,
        ]);
    }
}

//{
//  "comment": {
//    "comment": ""
//	},
//	"consignee":{
//    "address": "",
//		"city": "afdsfasd",
//		"country": "Algeria",
//		"email": "fdgsdfg@gmail.com",
//		"fax": "",
//		"firstName": "dfghsdfg",
//		"phone": "23452345234",
//		"province": "",
//		"secondName": "sdfgasdf",
//		"state": "",
//		"tid": "asdfasd",
//		"zip": ""
//	},
//	"descriptionOfGoods":{
//    "from": "asdfad",
//		"to": "dsfadsfa"
//	},
//	"notifyParty":{
//    "address": "",
//		"city": "sadfasd",
//		"country": "Afghanistan",
//		"firstName": "sadfasd",
//		"notifyParty": "",
//		"province": "",
//		"secondName": "asdfasdf",
//		"state": "",
//		"zip": ""
//	},
//	"sendDocumentTo":{
//    "address": "",
//		"airWaybill": "",
//		"city": "asdfasdf",
//		"country": "Albania",
//		"firstName": "asdfasdf",
//		"province": "",
//		"secondName": "asdfasdf",
//		"state": "",
//		"zip": ""
//	},
//	"shipper":{
//    "address": "",
//		"city": "rgfhdfgh",
//		"country": "Albania",
//		"email": "dfghsdf@gmail.com",
//		"fax": "",
//		"firstName": "fghsdfg",
//		"phone": "54623456345",
//		"province": "",
//		"secondName": "fdghdfg",
//		"state": "",
//		"tid": "3452345",
//		"zip": ""
//	},
//	"vehicle":{
//    "body": "",
//		"colour": "",
//		"make": "",
//		"model": "",
//		"valueOfVehicle": "",
//		"vin": "",
//		"year": ""
//	}
//}