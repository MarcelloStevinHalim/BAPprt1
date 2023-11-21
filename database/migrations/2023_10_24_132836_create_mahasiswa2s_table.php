<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMahasiswa2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa2s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('studentID')->nullable();
            $table->string('nama')->nullable();
            $table->text('jurusan')->nullable();
            $table->string('tahunMasuk')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahasiswa2s');
    }
}