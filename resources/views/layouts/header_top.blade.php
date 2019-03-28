<div class="header-top">
    {{--<nav class="navbar navbar-expand-lg navbar-light">--}}

    <button class="btn-toggle" type="button">
        <span class="btn-toggle-line"></span>
    </button>

    <div class="nav-list">
        <a class="nav-list__link {!! $page["home"]??"" !!}" href="{{ route("home") }}">Home</a>
        <a class="nav-list__link {!! $page["about"]??"" !!}" href="{{ route("about") }}">About</a>
        <a class="nav-list__link {!! $page["services"]??"" !!}" href="{{ route("services") }}">Services</a>
        <a class="nav-list__link {!! $page["rates"]??"" !!}" href="{{ route("rates") }}">Rates</a>
        <a class="nav-list__link {!! $page["contacts"]??"" !!}" href="{{ route("contacts") }}">Contacts</a>
        <a class="nav-list__link {!! $page["order"]??"" !!}" href="{{ route("order") }}">Order</a>
    </div>

    {{--</nav>--}}
</div>

