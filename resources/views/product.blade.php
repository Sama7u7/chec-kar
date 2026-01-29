@extends('layouts.test')

@section('content')
    <h1 class="text-4xl  font-mono pb-8">NUEVO PRODUCTO</h1>

    <div class="grid grid-cols-3 gap-4">
        <form action="{{ route('products.create') }}" method="post">

                @csrf

                <p>Escanee el codigo de barras</p>
                <input type="text" name="barcode" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Escanee una sola vez el codigo" required autofocus>
                @error('barcode')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <p class="mt-4">Nombre del producto</p>
                <input type="text" name="product-name" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa el nombre del producto escaneado" required>

                <p class="mt-4">Cantidad del producto</p>
                <input type="text" name="quantity" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa el nombre del producto escaneado" required>

                <p class="mt-4">Precio del producto</p>
                <input type="text" name="price" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa el nombre del producto escaneado" required>

                <p class="mt-4">Descripcion del producto (Opcional)</p>
                <input type="text" name="description" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full" placeholder="Ingresa el nombre del producto escaneado">

                <div class="mt-8 text-center col-span-3">
                    <input type="submit" value="Crear producto" class="bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 cursor-pointer">
                </div>
</form>
                <!-- Mensaje de éxito -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

    </div>




@endsection
