<?php

namespace App\Api\V1\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

/**
 * @SWG\Post(
 *     path="/api/email/test",
 *     summary="Get get test responce",
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
}
