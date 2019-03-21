@extends('layouts.admin', [
    "routes" => $routes,
])

@section('content')

    <ground-delivery-form-component
        :routes="{{ $routes['callRoutes'] }}"
        :auctions="{{ $auctions }}"
        :locations="{{ $locations }}"
        :exit-ports="{{ $exitPorts }}"
    ></ground-delivery-form-component>

@endsection