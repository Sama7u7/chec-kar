@extends('layouts.test')

@section('content')
    <h1 class="text-4xl  font-mono pb-8">Checking de carros</h1>

    <div class="grid grid-cols-3 gap-4">
            <div class="col-span-3 gap-4 mb-4 text-center">
                <h1>Datos de prestador de servicio</h1>
            </div>
            <div class="col-span-1">
                <p>Nombre</p>
                <input type="text" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500   w-full" placeholder="Ingresa el nombre">
            </div>
            <div class="col-span-1">
                <p>RFC</p>
                <input type="text" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa el RFC">
            </div>
            <div class="col-span-1">
            <p>¿Quien atiende?</p>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Selecciona un atendente</option>
                <option value="US">Juan Perez</option>
                <option value="CA">Maria Lopez</option>
                <option value="FR">Carlos Sanchez</option>
                <option value="DE">Ana Gomez</option>
            </select>
            </form>
            </div>
            <!-- Datos del cliente/  -->
            <div class="col-span-3 gap-4 mb-4 text-center">
                <h1>Datos del vehiculo</h1>
            </div>
            <div class="col-span-1">
                <p>Marca</p>
                <input type="text" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full " placeholder="Ingresa la marca">
            </div>
            <div class="col-span-1">
                <p>Modelo</p>
                <input type="text" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa el modelo">
            </div>
            <div class="col-span-1">
                <p>Año</p>
                <input type="text" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa el año">
            </div>
            <div class="col-span-1">
                <p>Color</p>
                <input type="text" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa el color">
            </div>
            <div class="col-span-1">
            <p>Numero de serie</p>
                <input type="text" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full"  placeholder="Ingresa el numero de serie">
            </div>
            <div class="col-span-1">
            <form class="max-w-sm mx-auto">
            <p>Tipo de servicio</p>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Selecciona un tipo de servicio</option>
                <option value="US">Lavado de autos</option>
                <option value="CA">Cambio de aceite</option>
                <option value="FR">Revisión de frenos</option>
                <option value="DE">Alineación de dirección</option>
            </select>
            </form>

            </div>


            </div>


        <!-- Botón de guardar inicia -->
        <div class="mt-8 text-center col-span-3">
            <button class="bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Guardar
        </button>
        </div>
        <!-- Botón de guardar termina -->
@endsection
