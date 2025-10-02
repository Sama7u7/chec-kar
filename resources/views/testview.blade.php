@extends('layouts.test')

@section('content')
    <h1 class="text-4xl  font-mono pb-8">Checking de carros</h1>

    <div class="grid grid-cols-3 gap-4">
            <div class="bg-primary border-4 border-secondary rounded-lg shadow-md p-6 max-w-sm">
                <h1 class="text-secondary">Hola desde testview.blade.php</h1>
                <h2 class="text-secondary text-xl font-bold mb-2">Título de la Tarjeta</h2>
                <p class="text-secondary">Este es el párrafo de ejemplo que describe el contenido de la tarjeta.</p>
                <button class="bg-primary border-2 border-secondary hover:bg-secondary text-secondary font-bold py-2 px-4 rounded mt-4">
                    Leer más
                </button>
            </div>
            <div class="bg-primary border-4 border-secondary rounded-lg shadow-md p-6 max-w-sm">
                <h1 class="text-secondary">Hola desde testview.blade.php</h1>
                <h2 class="text-secondary text-xl font-bold mb-2">Título de la Tarjeta</h2>
                <p class="text-secondary">Este es el párrafo de ejemplo que describe el contenido de la tarjeta.</p>
                <button class="bg-primary border-2 border-secondary hover:bg-secondary text-secondary font-bold py-2 px-4 rounded mt-4">
                    Leer más
                </button>
            </div>
    </div>

@endsection
