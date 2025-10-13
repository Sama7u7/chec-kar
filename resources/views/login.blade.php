@extends('layouts.login-layout')

@section('content')
    <h1 class="text-4xl  font-mono pb-8 text-center">Iniciar sesion</h1>

    <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-3 gap-4 mb-2    text-center">
                <h1 class=" text-center">Datos de inicio de sesion</h1>
            </div>
            <div class="col-span-3 gap-4 mb-4 text-center">
                <p>Coreo electronico</p>
                <input type="text" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500   w-full" placeholder="Ingresa tu correo">
                <p>Contraseña</p>
                <input type="password" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500   w-full" placeholder="Ingresa tu contraseña">
                        <!-- Botón de guardar inicia -->
                        <div class="mt-8 text-center col-span-3">
                            <button class="bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Guardar
                        </button>
                        </div>
                        <!-- Botón de guardar termina -->
            </div>

    </div>




@endsection
