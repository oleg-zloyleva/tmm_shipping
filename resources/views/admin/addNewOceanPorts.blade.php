@extends('layouts.admin', [
    "routes" => $routes,
])

@section('content')

    <ocean-delivery-form-component
        :exit-ports="{{ $exitPorts }}"
        :destination-ports="{{ $destinationPorts }}"
        :routes="{{ $routes['callRoutes'] }}"
    ></ocean-delivery-form-component>

@endsection