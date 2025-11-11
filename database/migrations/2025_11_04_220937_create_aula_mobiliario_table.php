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
        Schema::create('aula_mobiliario', function (Blueprint $table) {
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->foreignId('mobiliario_id')->constrained('mobiliario');
        });

        // Schema::create('aula_mobiliario', function (Blueprint $table) {
        //     $table->bigInteger('aula_id')->unsigned();
        //     $table->bigInteger('mobiliario_id')->unsigned();

        //     $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
        //     $table->foreign('mobiliario_id')->references('id')->on('mobiliario');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aula_mobiliario');
    }
};
