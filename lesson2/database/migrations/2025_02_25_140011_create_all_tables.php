<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
         // Creación de la tabla aviones
         Schema::create('aviones', function (Blueprint $table) {
            $table->string('matricula', 8);
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->integer('rango_max', false, true);
            $table->integer('rango_min', false, true);
            $table->primary('matricula');
            $table->timestamps();
        });

        // Creación de la tabla mantenimiento_av
        Schema::create('mantenimiento_av', function (Blueprint $table) {
            $table->string('avion', 8);
            $table->date('fecha');
            $table->enum('tipo_mant', ['Rutinario', 'Preventivo', 'Correctivo']);
            $table->integer('costo', false, true);
            $table->primary(['avion', 'fecha']);
            $table->foreign('avion')->references('matricula')->on('aviones')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        // Creación de la tabla membresias
        Schema::create('membresias', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nombre', 25);
            $table->integer('h_vuelo_disp', false, true);
            $table->enum('rango_vuelo', ['Nacional', 'Continental', 'Intercontinental', '']);
            $table->integer('precio', false, true);
            $table->timestamps();
        });

        // Creación de la tabla usuarios
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('dni', 9);
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->string('nom_usu', 50);
            $table->string('password', 20);
            $table->integer('h_vuelo', false, true);
            $table->unsignedBigInteger('membresia');
            $table->enum('tipo', ['R', 'A']);
            $table->primary('dni');
            $table->foreign('membresia')->references('id')->on('membresias')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        // Creación de la tabla viajes
        Schema::create('viajes', function (Blueprint $table) {
            $table->string('usuario', 9);
            $table->string('avion', 8);
            $table->date('fecha');
            $table->string('salida', 150);
            $table->string('llegada', 150);
            $table->integer('distancia', false, true);
            $table->time('duracion');
            $table->primary(['usuario', 'avion', 'fecha']);
            $table->foreign('avion')->references('matricula')->on('aviones')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('usuario')->references('dni')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('viajes');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('membresias');
        Schema::dropIfExists('mantenimiento_av');
        Schema::dropIfExists('aviones');
    }
};
 