<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link href="css/main.css" rel="stylesheet">

</head>
<body>

<div class="message-success" id="message-success">
    <div class="message-success__modal message-success__modal-success">
        <div class="message-success__close"></div>
        Your application is accepted.
    </div>
</div>

<div class="message-success" id="message-server-error">
    <div class="message-success__modal message-success__modal-error">
        <div class="message-success__close"></div>
        Server error!
    </div>
</div>

<!-- //============== HEADER ==============// -->
<header id="header">
    <div class="container" id="app">

        @include('layouts/header_top', ["page" => $page])

        @switch(true)
            @case($page["home"] == "active")
                @include('pages/home-header')
            @break

            @case($page["about"] == "active")
                @include('pages/about-header')
            @break

            @case($page["services"] == "active")
                @include('pages/services-header')
            @break

            @case($page["rates"] == "active")
                @include('pages/rates-header')
            @break

            @case($page["contacts"] == "active")
                @include('pages/contacts-header')
            @break

            @case($page["order"] == "active")
                @include('pages/order-header')
            @break

            @default
            {{--Default case...--}}
        @endswitch


    </div>
</header>