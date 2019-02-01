<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Letter</title>
</head>
<body>
<div>
    <h1>Air/Ocean Shipping Order Letter</h1>
</div>
<div>
    <div><h3>Comment</h3></div>
    <div><b>Comment:</b> <i>{{ $comment["comment"] }}</i></div>

    <hr>
    <div><h3>Consignee</h3></div>
    <div><b>address:</b> <i>{{ $consignee["address"] }}</i></div>
    <div><b>city:</b> <i>{{ $consignee["city"] }}</i></div>
    <div><b>country:</b> <i>{{ $consignee["country"] }}</i></div>
    <div><b>email:</b> <i>{{ $consignee["email"] }}</i></div>
    <div><b>fax:</b> <i>{{ $consignee["fax"] }}</i></div>
    <div><b>First Name:</b> <i>{{ $consignee["firstName"] }}</i></div>
    <div><b>phone:</b> <i>{{ $consignee["phone"] }}</i></div>
    <div><b>province:</b> <i>{{ $consignee["province"] }}</i></div>
    <div><b>second Name:</b> <i>{{ $consignee["secondName"] }}</i></div>
    <div><b>state:</b> <i>{{ $consignee["state"] }}</i></div>
    <div><b>tid:</b> <i>{{ $consignee["tid"] }}</i></div>
    <div><b>zip:</b> <i>{{ $consignee["zip"] }}</i></div>

    <hr>
    <div><h3>Description Of Goods</h3></div>
    <div><b>from:</b> <i>{{ $descriptionOfGoods["from"] }}</i></div>
    <div><b>to:</b> <i>{{ $descriptionOfGoods["to"] }}</i></div>
    <div><b>insurance:</b> <i>{{ $descriptionOfGoods["insurance"]??"No" }}</i></div>

    <hr>
    <div><h3>notify Party</h3></div>
    <div><b>from:</b> <i>{{ $notifyParty["address"] }}</i></div>
    <div><b>city:</b> <i>{{ $notifyParty["city"] }}</i></div>
    <div><b>country:</b> <i>{{ $notifyParty["country"] }}</i></div>
    <div><b>first Name:</b> <i>{{ $notifyParty["firstName"] }}</i></div>
    <div><b>notify Party:</b> <i>{{ $notifyParty["notifyParty"] }}</i></div>
    <div><b>province:</b> <i>{{ $notifyParty["province"] }}</i></div>
    <div><b>secondName:</b> <i>{{ $notifyParty["secondName"] }}</i></div>
    <div><b>state:</b> <i>{{ $notifyParty["state"] }}</i></div>
    <div><b>zip:</b> <i>{{ $notifyParty["zip"] }}</i></div>

    <hr>
    <div><h3>send Document To</h3></div>
    <div><b>address:</b> <i>{{ $sendDocumentTo["address"] }}</i></div>
    <div><b>airWaybill:</b> <i>{{ $sendDocumentTo["airWaybill"] }}</i></div>
    <div><b>city:</b> <i>{{ $sendDocumentTo["city"] }}</i></div>
    <div><b>country:</b> <i>{{ $sendDocumentTo["country"] }}</i></div>
    <div><b>firstName:</b> <i>{{ $sendDocumentTo["firstName"] }}</i></div>
    <div><b>province:</b> <i>{{ $sendDocumentTo["province"] }}</i></div>
    <div><b>secondName:</b> <i>{{ $sendDocumentTo["secondName"] }}</i></div>
    <div><b>state:</b> <i>{{ $sendDocumentTo["state"] }}</i></div>
    <div><b>zip:</b> <i>{{ $sendDocumentTo["zip"] }}</i></div>

    <hr>
    <div><h3>Shipper</h3></div>
    <div><b>business:</b> <i>{{ $shipper["business"]??"No" }}</i></div>
    <div><b>citizen:</b> <i>{{ $shipper["citizen"]??"No" }}</i></div>
    <div><b>address:</b> <i>{{ $shipper["address"] }}</i></div>
    <div><b>city:</b> <i>{{ $shipper["city"] }}</i></div>
    <div><b>country:</b> <i>{{ $shipper["country"] }}</i></div>
    <div><b>email:</b> <i>{{ $shipper["email"] }}</i></div>
    <div><b>fax:</b> <i>{{ $shipper["fax"] }}</i></div>
    <div><b>firstName:</b> <i>{{ $shipper["firstName"] }}</i></div>
    <div><b>phone:</b> <i>{{ $shipper["phone"] }}</i></div>
    <div><b>province:</b> <i>{{ $shipper["province"] }}</i></div>
    <div><b>secondName:</b> <i>{{ $shipper["secondName"] }}</i></div>
    <div><b>state:</b> <i>{{ $shipper["state"] }}</i></div>
    <div><b>tid:</b> <i>{{ $shipper["tid"] }}</i></div>
    <div><b>zip:</b> <i>{{ $shipper["zip"] }}</i></div>

    <hr>
    <div><h3>vehicle</h3></div>
    <div><b>body:</b> <i>{{ $vehicle["body"] }}</i></div>
    <div><b>colour:</b> <i>{{ $vehicle["colour"] }}</i></div>
    <div><b>make:</b> <i>{{ $vehicle["make"] }}</i></div>
    <div><b>model:</b> <i>{{ $vehicle["model"] }}</i></div>
    <div><b>valueOfVehicle:</b> <i>{{ $vehicle["valueOfVehicle"] }}</i></div>
    <div><b>vin:</b> <i>{{ $vehicle["vin"] }}</i></div>
    <div><b>year:</b> <i>{{ $vehicle["year"] }}</i></div>
</div>
</body>
</html>
