@extends('layouts.admin', [
    "routes" => $routes,
])

@section('content')

    <ground-delivery-component
        :data="{{ $data }}"
        :routes="{{ $routes['callRoutes'] }}"
        :auctions="{{ $auctions }}"
        :locations="{{ $locations }}"
        :exit-ports="{{ $exitPorts }}"
    ></ground-delivery-component>

@endsection