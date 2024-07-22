<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->char('matricula')->nullable();
            $table->string('email')->nullable();
            $table->date('nascimento')->nullable();
            $table->integer('curso')->comment('0 - Agronomia
                                               1 - Medicina
                                               2 - Direito
                                               3 - Sistemas de Informação');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
