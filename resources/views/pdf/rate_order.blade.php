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

        @if( isset($groundAuction) )

        <div><b>Ground Auction:</b> <i>{{ $groundAuction }}</i></div>
        <div><b>Ground Location:</b> <i>{{ $groundLocation }}</i></div>
        <div><b>Ground Exit Port:</b> <i>{{ $groundExitPort }}</i></div>
        <div><b>Ground Price:</b> <i>{{ $groundPrice }}</i></div>

        @endif

        @if( isset($oceanExitPort) )

        <div><b>Ocean Exit Port:</b> <i>{{ $oceanExitPort }}</i></div>
        <div><b>Ocean Destination Port:</b> <i>{{ $oceanDestinationPort }}</i></div>
        <div><b>Ocean Price:</b> <i>{{ $oceanPrice }}</i></div>

        @endif
    </div>
</body>
</html>
