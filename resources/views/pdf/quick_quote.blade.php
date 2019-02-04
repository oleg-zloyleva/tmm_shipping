<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quick Quote Letter</title>
</head>
<body>
    <div>
        <h1>Contact Us Letter</h1>
    </div>
    <div>
        <div><b>Freight Type:</b> <i>{{ $FreightType }}</i></div>
        <div><b>Weight:</b> <i>{{ $Weight }}</i></div>
        <div><b>Shipping From:</b> <i>{{ $ShippingFrom }}</i></div>
        <div><b>Shipping To:</b> <i>{{ $ShippingTo }}</i></div>
        <div><b>Email:</b> <i>{{ $Email }}</i></div>
        <div><b>Details:</b> <i>{{ $Details??'' }}</i></div>
    </div>
</body>
</html>
