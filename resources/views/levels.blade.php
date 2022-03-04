@extends('layout')

@section('title', 'Levels')

@section('h1', 'Levels')
@section('content')
    {{-- {{ dd($levels) }} --}}
    <ul>
        @forelse ($levels as $level)
            <li>
                <strong>Identificador: </strong> {{ $level->id }}
                <br>
                <strong>Descripción: </strong> {{ $level->description }}
            </li>
        @empty
            <h2>¡No hay niveles para mostrar!</h2>
        @endforelse
    </ul>
@endsection
