<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <link href="css/main.css" rel="stylesheet">

</head>
<body>

<section id="admin">
    <div class="admin-container">
        <h1>Admin Panel</h1>

        <div class="buttons-block">
            <button class="btn-control-admin active" data-trans="ground">GROUND TRANSPORTATION</button>
            <button class="btn-control-admin" data-trans="ocean">OCEAN TRANSPORTATION</button>
        </div>
        <div class="admin-block">

            <div class="table table-ground">
                <div class="table__title">GROUND TRANSPORTATION</div>
                <div class="table__head">
                    <div class="title">
                        <div class="title__col">Auction</div>
                        <div class="title__col">Location</div>
                        <div class="title__col">Port</div>
                        <div class="title__col">Price</div>
                        <div class="title__col"></div>
                    </div>
                    <div class="table__row">
                        <div class="table__col">
                            <input class="table__inp" name="auction-ground">
                        </div>
                        <div class="table__col">
                            <input class="table__inp" name="location-ground">
                        </div>
                        <div class="table__col">
                            <input class="table__inp" name="port-ground">
                        </div>
                        <div class="table__col">
                            <input class="table__inp only-number" name="price-ground">
                        </div>
                        <div class="table__col">
                            <button class="add-row add-row-ground">Add</button>
                        </div>
                    </div>
                </div>

                <div class="table__body table-body-ground">
                    <div class="table__row">
                        <div class="table__col">INSURANCE</div>
                        <div class="table__col">Little Rock</div>
                        <div class="table__col">Houston</div>
                        <div class="table__col">550</div>
                        <div class="table__col">
                            <button class="delete-row">Delete</button>
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="table__col">MANHEIM</div>
                        <div class="table__col">Arizona</div>
                        <div class="table__col">Chicago</div>
                        <div class="table__col">750</div>
                        <div class="table__col">
                            <button class="delete-row">Delete</button>
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="table__col">COPART</div>
                        <div class="table__col">Mobile</div>
                        <div class="table__col">Florida</div>
                        <div class="table__col">1250</div>
                        <div class="table__col">
                            <button class="delete-row">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table table-ocean">
                <div class="table__title">OCEAN TRANSPORTATION</div>
                <div class="table__head">
                    <div class="title">
                        <div class="title__col">Port</div>
                        <div class="title__col">Destination</div>
                        <div class="title__col">Price</div>
                        <div class="title__col"></div>
                    </div>
                    <div class="table__row">
                        <div class="table__col">
                            <input class="table__inp" name="port-ocean">
                        </div>
                        <div class="table__col">
                            <input class="table__inp" name="destination-ocean">
                        </div>
                        <div class="table__col">
                            <input class="table__inp only-number" name="price-ocean">
                        </div>
                        <div class="table__col">
                            <button class="add-row add-row-ocean">Add</button>
                        </div>
                    </div>
                </div>

                <div class="table__body table-body-ocean">
                    <div class="table__row">
                        <div class="table__col">NEW YORK, NJ</div>
                        <div class="table__col">KOTKA, FINLAND / PER VEHICLE</div>
                        <div class="table__col">750</div>
                        <div class="table__col">
                            <button class="delete-row">Delete</button>
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="table__col">NEW YORK, NJ</div>
                        <div class="table__col">ST.PETERSBURG, RUSSIA / PER VEHICLE</div>
                        <div class="table__col">950</div>
                        <div class="table__col">
                            <button class="delete-row">Delete</button>
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="table__col">NEW YORK, NJ</div>
                        <div class="table__col">KLAIPEDA, LITHUANIA / PER VEHICLE</div>
                        <div class="table__col">900</div>
                        <div class="table__col">
                            <button class="delete-row">Delete</button>
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="table__col">NEW YORK, NJ</div>
                        <div class="table__col">RIGA, LATVIA / PER VEHICLE</div>
                        <div class="table__col">950</div>
                        <div class="table__col">
                            <button class="delete-row">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<script src="{{ asset('js/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>