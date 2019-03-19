@extends('layouts.admin', [
    "routes" => $routes,
])

@section('content')

    <ocean-delivery-component
        :data="{{ $data }}"
        :destination-ports="{{ $destinationPorts }}"
    ></ocean-delivery-component>

@endsection