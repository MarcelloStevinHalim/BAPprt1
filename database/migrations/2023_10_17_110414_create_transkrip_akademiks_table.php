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
        Schema::create('transkrip_akademiks', function (Blueprint $table) {
            $table->id();
            $table->char('StudentID', 30);
            $table->char('Kode_matakuliah', 8);
            $table->char('Kode_term', 30);
            $table->char('nilai', 2);
            $table->integer('sks');
            $table->decimal('gpa', 2, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transkrip_akademiks');
    }
};
