@extends('layout')

{{-- success message --}}
@include('partials.success')

@section('content')


    <form class="max-w-screen-lg" action="{{ route('emails.store') }}" method="POST">
        @csrf

        {{-- error messages --}}
        <div class="text-center text-red-400">
            <small class="text-center">
                @error('name')
                    * {{ $message }}
                @enderror
            </small>
        </div>
        {{-- name --}}
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Nombre
            </label>
            </div>
            <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Escriba su nombre"
            name="name">
            </div>
        </div>



        {{-- error messages --}}
        <div class="text-center text-red-400">
            <small class="text-center">
                @error('email')
                    * {{ $message }}
                @enderror
            </small>
        </div>
        {{-- email --}}
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Nombre
            </label>
            </div>
            <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Escriba su correo"
            name="email">
            </div>
        </div>


        {{-- error messages --}}
        <div class="text-center text-red-400">
            <small class="text-center">
                @error('message')
                    * {{ $message }}
                @enderror
            </small>
        </div>
        {{-- message --}}
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                Mensaje
            </label>
            </div>
            <div class="md:w-2/3">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Escriba a quí su mensaje..."
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
            ></textarea>
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
            <button class="shadow bg-purple-500/75 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                Enviar mensaje
            </button>
            </div>
        </div>
    </form>
@endsection
