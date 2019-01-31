<?php

namespace App\Http\Requests\Email;

use App\Http\Requests\Request;

class AirShippingOrderRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "comment" => "required|array",
                "comment.comment" => "string",

            "consignee" => "required|array",
                "consignee.address" => "string",
                "consignee.city" => "required|string",
                "consignee.country" => "required|string",
                "consignee.email" => "required|email|string",
                "consignee.fax" => "string",
                "consignee.firstName" => "required|string",
                "consignee.phone" => "required|string",
                "consignee.province" => "string",
                "consignee.secondName" => "required|string",
                "consignee.state" => "string",
                "consignee.tid" => "required|string",
                "consignee.zip" => "string",

            "descriptionOfGoods" => "required|array",
                "descriptionOfGoods.from" => "required|string",
                "descriptionOfGoods.to" => "required|string",

            "notifyParty" => "required|array",
                "notifyParty.address" => "string",
                "notifyParty.city" => "required|string",
                "notifyParty.country" => "required|string",
                "notifyParty.firstName" => "required|string",
                "notifyParty.notifyParty" => "string",
                "notifyParty.province" => "string",
                "notifyParty.secondName" => "required|string",
                "notifyParty.state" => "string",
                "notifyParty.zip" => "string",

            "sendDocumentTo" => "required|array",
                "sendDocumentTo.address" => "string",
                "sendDocumentTo.airWaybill" => "string",
                "sendDocumentTo.city" => "required|string",
                "sendDocumentTo.country" => "required|string",
                "sendDocumentTo.firstName" => "required|string",
                "sendDocumentTo.province" => "string",
                "sendDocumentTo.secondName" => "required|string",
                "sendDocumentTo.state" => "string",
                "sendDocumentTo.zip" => "string",

            "shipper" => "required|array",
                "shipper.address" => "string",
                "shipper.city" => "required|string",
                "shipper.country" => "required|string",
                "shipper.email" => "required|email|string",
                "shipper.fax" => "string",
                "shipper.firstName" => "required|string",
                "shipper.phone" => "required|string",
                "shipper.province" => "string",
                "shipper.secondName" => "required|string",
                "shipper.state" => "string",
                "shipper.tid" => "required|string",
                "shipper.zip" => "string",

            "vehicle" => "required|array",
                "vehicle.body" => "string",
                "vehicle.colour" => "string",
                "vehicle.make" => "string",
                "vehicle.model" => "string",
                "vehicle.valueOfVehicle" => "string",
                "vehicle.vin" => "string",
                "vehicle.year" => "string",
        ];
    }
}
