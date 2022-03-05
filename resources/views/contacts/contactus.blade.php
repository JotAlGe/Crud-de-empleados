@extends('layout')

@section('content')
    <p><strong>Nombre: </strong> {{ $mess['name'] }}</p>
    <p><strong>Correo: </strong> {{ $mess['email'] }}</p>
    <p><strong>Mensaje: </strong> {{ $mess['message'] }}</p>
@endsection
