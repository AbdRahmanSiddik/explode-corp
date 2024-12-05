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
        Schema::create('barangs', function (Blueprint $table) {
            $table->unsignedInteger('id_barang')->autoIncrement();
            $table->string('token_barang', 16);
            $table->unsignedInteger('kategori_id');
            $table->string('nama_barang', 100);
            $table->string('thumbnail');
            $table->text('deskripsi');
            $table->decimal('harga', 19, 2);
            $table->integer('stok');
            $table->timestamps();

            $table->foreign('kategori_id')
                  ->references('id_kategori')
                  ->on('kategoris')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
