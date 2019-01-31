<?php

namespace App\Api\V1\Controllers;

use App\Http\Requests\Email\ContactUsRequest;
use App\Http\Requests\Email\QuickQuoteRequest;
use App\Mail\ContactUsEmail;
use App\Mail\QuickQouteEmail;
use App\Mail\TestEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

        Mail::to("test@test.com")->send(new TestEmail());

        return response()->json(["status" => "ok"]);
    }

    /**
     * @param \App\Http\Requests\Email\ContactUsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function contactUs(ContactUsRequest $request){

        Mail::to("test@test.com")->send(new ContactUsEmail());

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
}
