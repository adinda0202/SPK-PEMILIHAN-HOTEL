<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriasTable extends Migration
{
    public function up()
    {
        Schema::create('kriteria', function (Blueprint $table) {
            $table->string('kode_kriteria', 10)->primary(); // VARCHAR(10)
            $table->string('nama_kriteria', 255); // VARCHAR(255) default
            $table->integer('nilai_bobot', 10);
            $table->string('jenis_kriteria', 100); // VARCHAR(100)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kriteria');
    }
}

