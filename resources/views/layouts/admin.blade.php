<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TMM INTERNATIONAL INC || Admin</title>
</head>
<body>

    <div class="container-fluid" id="app">

        <admin-menu-component
            :routes="{{ collect($routes) }}"
        ></admin-menu-component>

        <div class="row">
            <div class="col">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>