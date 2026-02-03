<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     // Manejar el envío del formulario y crear el produccto con codigo de barras
        public function storeProducts(Request $request)
        {
            // 1. Validar
            $validated = $request->validate([
                'barcode'      => 'required|string|unique:products,barcode',
                'product-name' => 'required|string|max:255',
                'quantity'     => 'required|integer|min:0',
                'price'        => 'required|numeric|min:0',
                'description'  => 'nullable|string|max:255',
            ]);

            // 2. Crear (Usando Product en singular y mapeando bien los datos)
            Product::create([
                'barcode'     => $validated['barcode'],
                'name'        => $validated['product-name'],
                'quantity'    => $validated['quantity'],
                'price'       => $validated['price'],
                'description' => $validated['description'] ?? null,
            ]);

        return redirect()->back()->with('success', 'Producto creado exitosamente.');
    }
}
