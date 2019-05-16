<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rate Order Letter</title>
</head>
<body>
    <div>
        <h1>Rate Order Letter</h1>
    </div>
    <div>
        <div><b>Name:</b> <i>{{ $name }}</i></div>
        <div><b>Phone:</b> <i>{{ $phone }}</i></div>

        <div><b>Ground Auction:</b> <i>{{ $ground['auction']??'' }}</i></div>
        <div><b>Ground Location:</b> <i>{{ $ground['location']??'' }}</i></div>
        <div><b>Ground Exit Port:</b> <i>{{ $ground['exitPort']??'' }}</i></div>
        <div><b>Ground Price:</b> <i>{{ $ground['price']??'' }}</i></div>

        <div><b>Ocean Exit Port:</b> <i>{{ $ocean['exitPort']??'' }}</i></div>
        <div><b>Ocean Destination Port:</b> <i>{{ $ocean['destination']??'' }}</i></div>
        <div><b>Ocean Price:</b> <i>{{ $ocean['price']??'' }}</i></div>

        <div><b>Total Price:</b> <i>{{ $totalPrice }}</i></div>
    </div>
</body>
</html>
