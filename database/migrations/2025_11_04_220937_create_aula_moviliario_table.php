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
        Schema::create('aula_moviliario', function (Blueprint $table) {
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->foreignId('moviliario_id')->constrained('moviliario');
        });

        // Schema::create('aula_moviliario', function (Blueprint $table) {
        //     $table->bigInteger('aula_id')->unsigned();
        //     $table->bigInteger('moviliario_id')->unsigned();

        //     $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
        //     $table->foreign('moviliario_id')->references('id')->on('moviliario');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aula_moviliario');
    }
};
