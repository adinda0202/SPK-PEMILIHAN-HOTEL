<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data_hotel', function (Blueprint $table) {
            $table->id(); // Ini akan membuat kolom id dengan tipe data integer dan auto-increment
            $table->string('kode_hotel')->nullable();
            $table->string('nama_hotel');
            $table->text('alamat_hotel')->nullable();
            $table->decimal('rating', 8, 2)->nullable();
            $table->string('jenis_hotel')->nullable();
            $table->text('fasilitas_utama')->nullable();
            $table->timestamps(); // Ini akan menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_hotel');
    }
};
