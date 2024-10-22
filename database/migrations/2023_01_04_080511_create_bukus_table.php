<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2023_01_04_080511_create_bukus_table.php
            $table->char('KodeBuku');
            $table->string('judulBuku');
            $table->string('namaPengarang');
=======
            $table->integer('guru_id');
            $table->date('waktu');
            $table->time('masuk');
            $table->time('pulang');
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e:database/migrations/2022_11_28_020444_create_presensis_table.php
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
        Schema::dropIfExists('bukus');
    }
}
