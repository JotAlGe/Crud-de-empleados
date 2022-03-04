@extends('layout')

@section('title', 'professions')

@section('h1', 'Listado de profesiones')


@section('content')
{{-- {{ dd($professions) }} --}}

<ul>
    @forelse ($professions as $profession)
        <li>
            {{ $profession->title }}
        </li>
    @empty
        <h2>¡No hay profesiones para mostrar!</h2>
    @endforelse
</ul>
@endsection
