<div class="header-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars fa-1x icon-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link {!! $page["home"]??"" !!}" href="{{ route("home") }}">Home</a>
                <a class="nav-item nav-link {!! $page["about"]??"" !!}" href="{{ route("about") }}">About</a>
                <a class="nav-item nav-link {!! $page["services"]??"" !!}" href="{{ route("services") }}">Services</a>
                <a class="nav-item nav-link {!! $page["rates"]??"" !!}" href="{{ route("rates") }}">Rates</a>
                <a class="nav-item nav-link {!! $page["contacts"]??"" !!}" href="{{ route("contacts") }}">Contacts</a>
                <a class="nav-item nav-link {!! $page["order"]??"" !!}" href="{{ route("order") }}">Order</a>
            </div>
        </div>
    </nav>
</div>

