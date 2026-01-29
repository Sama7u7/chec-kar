<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Nombre del producto
            $table->string('name');

            // Código de barras (Debe ser único en la DB para evitar duplicados)
            $table->string('barcode')->unique();

            // Cantidad / Stock (Integer porque no vendes 1.5 productos usualmente)
            // 'default(0)' es útil para que empiece en 0 si no pones nada.
            $table->integer('quantity')->default(0);

            // Precio. IMPORTANTE: Usa 'decimal', no 'float' ni 'double' para dinero.
            // (10, 2) significa 10 dígitos en total, de los cuales 2 son decimales.
            $table->decimal('price', 10, 2)->nullable();

            // Descripción (Opcional, por eso 'nullable')
            $table->text('description')->nullable();

            // Estado (Activo/Inactivo) - útil si quieres dejar de venderlo sin borrarlo
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
