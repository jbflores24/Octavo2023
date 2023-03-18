@extends('layout.app')
@section('titulo')
    Perfil de {{ $user->username }}
@endsection
@section('contenido')
    <div class="flex justify-center p-5">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('imagenes/usuario.svg') }}" alt="Imágen del usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">
                    {{ $user->name }}
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">
                        Seguidores
                    </span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">
                        Siguiendo
                    </span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">
                        Posts
                    </span>
                </p>
            </div>
        </div>
    </div>
@endsection
