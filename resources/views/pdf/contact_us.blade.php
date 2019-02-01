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
        <h1>Contact Us Letter</h1>
    </div>
    <div>
        <div><b>First Name:</b> <i>{{ $FirstName }}</i></div>
        <div><b>Second Name:</b> <i>{{ $SecondName }}</i></div>
        <div><b>Phone:</b> <i>{{ $Phone }}</i></div>
        <div><b>Email:</b> <i>{{ $Email }}</i></div>
        <div><b>Message:</b> <i>{{ $Message??"Empty message field" }}</i></div>
    </div>
</body>
</html>