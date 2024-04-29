<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nome');
            $table->string('cpf');
            $table->string('tipo');
            $table->integer('mes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *  @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
