<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbolas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama_Club');
            $table->string('Nama_Pemesan');
            $table->integer('Jumlah_Tiket');
            $table->string('Kelas_Tiket');
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
        Schema::dropIfExists('tbolas');
    }
}
