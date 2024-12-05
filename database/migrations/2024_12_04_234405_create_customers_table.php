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
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedInteger('id_customer')->autoIncrement();
            $table->string('token_customer', 16);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama_customer')->nullable();
            $table->string('alamat_customer')->nullable();
            $table->string('kontak')->nullable();
            $table->integer('jumlah_barang')->nullable();
            $table->decimal('total_harga', 19, 2)->nullable();
            $table->enum('status_bayar', ['sukses', 'pending', 'gagal'])->default('pending');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
