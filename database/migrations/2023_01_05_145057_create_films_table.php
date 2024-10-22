<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2023_01_05_145057_create_films_table.php
            $table->string('judulFilm');
            $table->string('jenisFilm');
=======
            $table->string('nama_kelas');
            $table->integer('jumlah_siswa');
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e:database/migrations/2022_11_30_053758_create_kelas_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
