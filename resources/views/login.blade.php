@extends('layouts.login-layout')

@section('content')
    <h1 class="text-4xl font-mono pb-8 text-center">Iniciar sesión</h1>

    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-3 gap-4 mb-2 text-center">
            <h1 class="text-center">Datos de inicio de sesión</h1>
        </div>

        <div class="col-span-3 gap-4 mb-4 text-center">
            <form action="{{ route('login') }}" method="post">
                @csrf

                <p>Correo electrónico</p>
                <input type="email" name="email" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa tu correo" required>
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <p class="mt-4">Contraseña</p>
                <input type="password" name="password" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa tu contraseña" required>
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <!-- Botón de guardar -->
                <div class="mt-8 text-center col-span-3">
                    <input type="submit" value="Entrar" class="bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 cursor-pointer">
                </div>

                @if (session('success'))
                    <div class="alert alert-success mt-4">
                        {{ session('success') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
