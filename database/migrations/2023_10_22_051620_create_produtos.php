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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', '150');
            $table->string('forma_uso', '1500');
            $table->string('imagem', "500")->nullable();
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('IDpatologia');
            $table->timestamps();
            $table->foreign('IDpatologia')->references('id')->on('patologias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};