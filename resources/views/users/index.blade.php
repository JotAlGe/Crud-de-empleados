@extends('layout')

@section('title', 'users')

@section('h1', 'Listado de usuarios')

@section('create')
<a href="{{ route('users.create') }}" class="shadow bg-purple-500/75 hover:bg-purple-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Crear nuevo usuario</a>
@endsection


@section('content')
    <ul>
        {{--  mensaje desde el controlador  --}}
        @if(session('success'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 p-3 shadow-md mb-8" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold"> {{ session('success') }}</p>

                    </div>
                </div>
            </div>
        @endif

        @forelse ($users as $user)
                <li> Nombre:<strong><a class="text-purple-600/60" href="{{ route('users.show', $user) }}"> {{ $user->name }}</a> </strong>
                    {{-- {{route('users.show', $user->slug)}} --}}
                    <br> Apellido: <strong>{{ $user->lastname }}</strong>
                    <br> Correo: <strong> {{ $user->email }} </strong>

                    <br>

                    {{-- delete --}}
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="p-1 bg-red-300 text-white hover:bg-red-300/75 rounded">Eliminar a {{ $user->name }}</button>
                    </form>
                </li>
                <hr class="my-2">
            @empty
                <h2>¡No hay usuarios para mostrar!</h2>
            @endforelse
    </ul>
    {{ $users->links() }}
@endsection
