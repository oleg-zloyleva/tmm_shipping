@extends('layouts.admin', [
    "routes" => $routes,
])

@section('content')

    <ocean-delivery-form-component
        :exit-ports="{{ $exitPorts }}"
        :destination-ports="{{ $destinationPorts }}"
    ></ocean-delivery-form-component>

@endsection