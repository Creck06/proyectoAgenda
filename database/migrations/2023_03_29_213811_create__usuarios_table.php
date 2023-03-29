<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 100);
            $table->string('Correo', 100);
            $table->string('NumeroTel', 100);
            $table->string('Direccion', 100);
            $table->unsignedBigInteger('Id_TipoUs');
            $table->timestamps();
            $table->foreign('Id_TipoUs')->references('id')->on('tipo_usuario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_usuarios');
    }
};
