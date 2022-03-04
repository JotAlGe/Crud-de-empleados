@extends('layout')

@section('title', 'Editar Usuario')

@section('h1', "Editar a $user->name")


@section('content')
<form class="w-full max-w-sm border-solid border-2 border-purple-500 p-5 rounded-lg" method="POST" action="{{ route('users.update', $user->id) }}">
    @method('PATCH')

    {{-- include partials validation --}}
    @include('partials.validationsErrors')


    {{-- include form --}}
    @include('users._form')



  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Update
      </button>

      <a href="{{ route('users.show', $user) }}" class="shadow bg-red-300 hover:bg-red-300/75 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Cancelar</a>
    </div>
  </div>
</form>
@endsection

