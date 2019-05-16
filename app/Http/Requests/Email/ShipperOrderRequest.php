<?php

namespace App\Http\Requests\Email;

use App\Http\Requests\Request;

class ShipperOrderRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "typeTransport" => "required|string",
            "shipper" => "required|array",

                "shipper.tid" => "required|string",
                "shipper.firstName" => "required|string",
                "shipper.secondName" => "required|string",
                "shipper.address" => "string",
                "shipper.email" => "required|string|email",
                "shipper.phone" => "required|string",
                "shipper.fax" => "string",
                "shipper.city" => "required|string",
                "shipper.state" => "string",
                "shipper.province" => "string",
                "shipper.country" => "required|string",
                "shipper.zip" => "string",
                "shipper.uploadFile" => "string", // image

            "consignee" => "required|array",
                "consignee.firstName" => "required|string",
                "consignee.secondName" => "required|string",
                "consignee.address" => "string",
                "consignee.email" => "required|string|email",
                "consignee.phone" => "required|string",
                "consignee.fax" => "string",
                "consignee.city" => "required|string",
                "consignee.state" => "string",
                "consignee.province" => "string",
                "consignee.country" => "required|string",
                "consignee.zip" => "string",

            "notifyParty" => "required|array",
                "notifyParty.notifyParty" => "string",
                "notifyParty.firstName" => "required|string",
                "notifyParty.secondName" => "required|string",
                "notifyParty.address" => "string",
                "notifyParty.city" => "required|string",
                "notifyParty.state" => "string",
                "notifyParty.province" => "string",
                "notifyParty.country" => "required|string",
                "notifyParty.zip" => "string",

            "descriptionOfGoods" => "required|array",
                "descriptionOfGoods.description_1" => "string",
                "descriptionOfGoods.descriptionValue_1" => "string",
                "descriptionOfGoods.description_2" => "string",
                "descriptionOfGoods.descriptionValue_2" => "string",
                "descriptionOfGoods.description_3" => "string",
                "descriptionOfGoods.descriptionValue_3" => "string",
                "descriptionOfGoods.description_4" => "string",
                "descriptionOfGoods.descriptionValue_4" => "string",
                "descriptionOfGoods.description_5" => "string",
                "descriptionOfGoods.descriptionValue_5" => "string",
                "descriptionOfGoods.description_6" => "string",
                "descriptionOfGoods.descriptionValue_6" => "string",
                "descriptionOfGoods.description_7" => "string",
                "descriptionOfGoods.descriptionValue_7" => "string",
                "descriptionOfGoods.from" => "string",
                "descriptionOfGoods.to" => "string",
                "descriptionOfGoods.insurance" => "boolean",

            "vehicle" => "required|array",
                "vehicle.year" => "string",
                "vehicle.make" => "string",
                "vehicle.model" => "string",
                "vehicle.body" => "string",
                "vehicle.colour" => "string",
                "vehicle.vin" => "string",
                "vehicle.valueVehicle" => "string",
                "vehicle.insurance" => "boolean",

            "sendDocuments" => "required|array",
                "sendDocuments.waybill" => "string",
                "sendDocuments.firstName" => "required|string",
                "sendDocuments.secondName" => "required|string",
                "sendDocuments.address" => "string",
                "sendDocuments.city" => "required|string",
                "sendDocuments.state" => "string",
                "sendDocuments.province" => "string",
                "sendDocuments.country" => "required|string",
                "sendDocuments.zip" => "string",
                "sendDocuments.uploadFile" => "string", // image

            "usppi" => "required|array",
                "usppi.firstExporterName" => "string",
                "usppi.secondExporterName" => "string",
                "usppi.signature" => "string", // image
                "usppi.printName" => "string",
                "usppi.einTaxId" => "string",
                "usppi.titleFirst" => "string",
                "usppi.titleSecond" => "string",
                "usppi.dateFirst" => "string",
                "usppi.dateSecond" => "string",

            "fppi" => "required|array",
                "fppi.name" => "string",
                "fppi.country" => "string",
                "fppi.address" => "string",
                "fppi.witnessWhereof" => "string",
                "fppi.witness" => "string",
                "fppi.signature" => "string", // image
                "fppi.title" => "string",
                "fppi.date" => "string",
                "fppi.foreign" => "string",

            "comments" => "required|array",
                "comments.comment" => "string",
        ];
    }
}
