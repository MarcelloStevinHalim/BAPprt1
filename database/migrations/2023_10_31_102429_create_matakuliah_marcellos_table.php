<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatakuliahMarcellosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah_marcellos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('kodeMatakuliah')->nullable();
            $table->text('matakuliah')->nullable();
            $table->string('sks')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matakuliah_marcellos');
    }
}
