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
            $table->id(); // otomatik artan birincil anahtar
            $table->string('title'); // başlık kolonu
            $table->text('content'); // içerik kolonu
            $table->string('image'); // resim URL kolonu
            $table->decimal('price', 8, 2); // fiyat kolonu (örneğin 999999.99 şeklinde)
            $table->string('link'); // ürün sayfası URL kolonu
            $table->timestamps(); // created_at ve updated_at tarihleri
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
