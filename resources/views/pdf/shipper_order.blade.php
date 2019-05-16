<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipper Order Letter</title>
    <style>
        .page_break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <div>
        <h1>Shipper Order Letter</h1>
    </div>
    <div>
        <div><h3>Shipper</h3></div>

        <div><b>Transport</b> <i>{{ $typeTransport }}</i></div>
        <div><b>TID:</b> <i>{{ $shipper["tid"] }}</i></div>
        <div><b>First Name:</b> <i>{{ $shipper["firstName"] }}</i></div>
        <div><b>Second Name:</b> <i>{{ $shipper["secondName"] }}</i></div>
        <div><b>Address:</b> <i>{{ $shipper["address"]??'' }}</i></div>
        <div><b>Email:</b> <i>{{ $shipper["email"] }}</i></div>
        <div><b>Phone:</b> <i>{{ $shipper["phone"] }}</i></div>
        <div><b>Fax:</b> <i>{{ $shipper["fax"]??'' }}</i></div>
        <div><b>City:</b> <i>{{ $shipper["city"] }}</i></div>
        <div><b>State:</b> <i>{{ $shipper["state"]??'' }}</i></div>
        <div><b>Province:</b> <i>{{ $shipper["province"]??'' }}</i></div>
        <div><b>Country:</b> <i>{{ $shipper["country"] }}</i></div>
        <div><b>ZIP:</b> <i>{{ $shipper["zip"]??'' }}</i></div>
        @if (isset($shipper['uploadFile']))
        <div><img src="{{ $shipper['uploadFile'] }}" alt=""></div>
        @endif
        <hr>

        <div><h3>Consignee</h3></div>
        <div><b>First Name:</b> <i>{{ $consignee["firstName"] }}</i></div>
        <div><b>Second Name:</b> <i>{{ $consignee["secondName"] }}</i></div>
        <div><b>Address:</b> <i>{{ $consignee["address"]??'' }}</i></div>
        <div><b>Email:</b> <i>{{ $consignee["email"] }}</i></div>
        <div><b>Phone:</b> <i>{{ $consignee["phone"] }}</i></div>
        <div><b>Fax:</b> <i>{{ $consignee["fax"]??'' }}</i></div>
        <div><b>City:</b> <i>{{ $consignee["city"] }}</i></div>
        <div><b>State:</b> <i>{{ $consignee["state"]??'' }}</i></div>
        <div><b>Province:</b> <i>{{ $consignee["province"]??'' }}</i></div>
        <div><b>Country:</b> <i>{{ $consignee["country"] }}</i></div>
        <div><b>ZIP:</b> <i>{{ $consignee["zip"]??'' }}</i></div>
        <hr>


        <div><h3>Notify Party</h3></div>
        <div><b>Notify Party:</b> <i>{{ $notifyParty["notifyParty"]??'' }}</i></div>
        <div><b>First Name:</b> <i>{{ $notifyParty["firstName"] }}</i></div>
        <div><b>Second Name:</b> <i>{{ $notifyParty["secondName"] }}</i></div>
        <div><b>From:</b> <i>{{ $notifyParty["address"]??'' }}</i></div>
        <div><b>City:</b> <i>{{ $notifyParty["city"] }}</i></div>
        <div><b>State:</b> <i>{{ $notifyParty["state"]??'' }}</i></div>
        <div><b>Province:</b> <i>{{ $notifyParty["province"]??'' }}</i></div>
        <div><b>Country:</b> <i>{{ $notifyParty["country"] }}</i></div>
        <div><b>ZIP:</b> <i>{{ $notifyParty["zip"]??'' }}</i></div>
        <hr>

        <div><h3>Description Of Goods</h3></div>
        <div><b>Description 1:</b><i>{{ $descriptionOfGoods["description_1"] }}</i></div>
        <div><b>Description Value 1:</b><i>{{ $descriptionOfGoods["descriptionValue_1"] }}</i></div>
        <div><b>Description 2:</b><i>{{ $descriptionOfGoods["description_2"] }}</i></div>
        <div><b>Description Value 2:</b><i>{{ $descriptionOfGoods["descriptionValue_2"] }}</i></div>
        <div><b>Description 3:</b><i>{{ $descriptionOfGoods["description_3"] }}</i></div>
        <div><b>Description Value 3:</b><i>{{ $descriptionOfGoods["descriptionValue_3"] }}</i></div>
        <div><b>Description 4:</b><i>{{ $descriptionOfGoods["description_4"] }}</i></div>
        <div><b>Description Value 4:</b><i>{{ $descriptionOfGoods["descriptionValue_4"] }}</i></div>
        <div><b>Description 5:</b><i>{{ $descriptionOfGoods["description_5"] }}</i></div>
        <div><b>Description Value 5:</b><i>{{ $descriptionOfGoods["descriptionValue_5"] }}</i></div>
        <div><b>Description 6:</b><i>{{ $descriptionOfGoods["description_6"] }}</i></div>
        <div><b>Description Value 6:</b><i>{{ $descriptionOfGoods["descriptionValue_6"] }}</i></div>
        <div><b>Description 7:</b><i>{{ $descriptionOfGoods["description_7"] }}</i></div>
        <div><b>Description Value 7:</b><i>{{ $descriptionOfGoods["descriptionValue_7"] }}</i></div>
        <div><b>From:</b> <i>{{ $descriptionOfGoods["from"] }}</i></div>
        <div><b>To:</b> <i>{{ $descriptionOfGoods["to"] }}</i></div>
        <div><b>Insurance:</b> <i>{{ $descriptionOfGoods["insurance"]?"Yes":"No" }}</i></div>
        <hr>

        <div><h3>Vehicle</h3></div>
        <div><b>Year:</b> <i>{{ $vehicle["year"]??'' }}</i></div>
        <div><b>Make:</b> <i>{{ $vehicle["make"]??'' }}</i></div>
        <div><b>Model:</b> <i>{{ $vehicle["model"]??'' }}</i></div>
        <div><b>Body:</b> <i>{{ $vehicle["body"]??'' }}</i></div>
        <div><b>Colour:</b> <i>{{ $vehicle["colour"]??'' }}</i></div>
        <div><b>VIN:</b> <i>{{ $vehicle["vin"]??'' }}</i></div>
        <div><b>Value of vehicle:</b> <i>{{ $vehicle["valueVehicle"]??'' }}</i></div>
        <div><b>Insurance:</b> <i>{{ $vehicle["insurance"]?"Yes":"No" }}</i></div>
        <hr>

        <div><h3>Send Documents To</h3></div>
        <div><b>Air Waybill:</b> <i>{{ $sendDocuments["waybill"]??'' }}</i></div>
        <div><b>First Name:</b> <i>{{ $sendDocuments["firstName"] }}</i></div>
        <div><b>Second Name:</b> <i>{{ $sendDocuments["secondName"] }}</i></div>
        <div><b>Address:</b> <i>{{ $sendDocuments["address"]??'' }}</i></div>
        <div><b>City:</b> <i>{{ $sendDocuments["city"] }}</i></div>
        <div><b>State:</b> <i>{{ $sendDocuments["state"]??'' }}</i></div>
        <div><b>Province:</b> <i>{{ $sendDocuments["province"]??'' }}</i></div>
        <div><b>Country:</b> <i>{{ $sendDocuments["country"] }}</i></div>
        <div><b>ZIP:</b> <i>{{ $sendDocuments["zip"]??'' }}</i></div>
        @if (isset($sendDocuments['uploadFile']))
        <div><img src="{{ $sendDocuments['uploadFile'] }}" alt=""></div>
        @endif
        <hr>

        <div><h3>The U.S. Principal Party in Interest</h3></div>
        <div><b>Exporter First Name:</b> <i>{{ $usppi["firstExporterName"]??'' }}</i></div>
        <div><b>Exporter Second Name:</b> <i>{{ $usppi["secondExporterName"]??'' }}</i></div>
        <div><b>Signature:</b></div>
        @if (isset($usppi["signature"]))
        <div><img src="{{ $usppi["signature"] }}" alt=""></div>
        @endif
        <div><b>Print Name:</b> <i>{{ $usppi["printName"]??'' }}</i></div>
        <div><b>E.I.N. (TAX ID):</b> <i>{{ $usppi["einTaxId"]??'' }}</i></div>
        <div><b>Title:</b> <i>{{ $usppi["titleFirst"]??'' }} * {{ $usppi["titleSecond"]??'' }}</i></div>
        <div><b>Date:</b> <i>{{ $usppi["dateFirst"]??'' }} * {{ $usppi["dateSecond"]??'' }}</i></div>
        <hr>

        <div><h3>F.P.P.I.</h3></div>
        <div><b>Name:</b> <i>{{ $fppi["name"]??'' }}</i></div>
        <div><b>Country:</b> <i>{{ $fppi["country"]??'' }}</i></div>
        <div><b>Address:</b> <i>{{ $fppi["address"]??'' }}</i></div>
        <div><b>In Witness Whereof:</b> <i>{{ $fppi["witnessWhereof"]??'' }}</i></div>
        <div><b>Witness:</b> <i>{{ $fppi["witness"]??'' }}</i></div>
        <div><b>Signature:</b></div>
        @if (isset($fppi["signature"]))
        <div><img src="{{ $fppi["signature"] }}" alt=""></div>
        @endif
        <div><b>Title:</b> <i>{{ $fppi["title"]??'' }}</i></div>
        <div><b>Date:</b> <i>{{ $fppi["date"]??'' }}</i></div>
        <div><b>Foreign Principal in Part in Interest (FPPI) V.A.T.#:</b> <i>{{ $fppi["foreign"]??'' }}</i></div>
        <hr>

        <div><h3>Comment</h3></div>
        <div><b>Comment:</b> <i>{{ $comments["comment"]??'' }}</i></div>
    </div>
</body>
</html>
