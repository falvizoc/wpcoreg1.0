<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasosProcesalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasos_procesales', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('especialidad_id');
            $table->foreign('especialidad_id')->references('id')->on('especialidades');
            
            $table->string('nombre');
            $table->string('placeholder');
            
            $table->string('default');
            $table->integer('min');
            $table->integer('max');

            $table->integer('type');
            $table->json('opciones');
            $table->integer('obligatorio');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasos_procesales');
    }
}
