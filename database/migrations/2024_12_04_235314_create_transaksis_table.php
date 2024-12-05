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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->unsignedInteger('id_transaksi')->autoIncrement();
            $table->string('token_transaksi', 16);
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('barang_id');
            $table->integer('kuantitas');
            $table->decimal('jumlah_harga', 19, 2);
            $table->timestamps();

            $table->foreign('customer_id')
                  ->references('id_customer')
                  ->on('customers')
                  ->onDelete('cascade');

            $table->foreign('barang_id')
                  ->references('id_barang')
                  ->on('barangs')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
