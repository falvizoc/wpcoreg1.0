<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('especialidad_id');
            $table->foreign('especialidad_id')->references('id')->on('especialidades');

            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->text('titulo');
            $table->text('juzgado');
            $table->date('fecha_inicio')->nullable();
            $table->boolean('autorizacion_mev');
            $table->longText('domicilio_constituido');
            $table->longText('ultimo');
            $table->longText('proximo');
            $table->longText('observaciones');
            
            $table->decimal('monto_bono_y_jus',14,2);

            $table->unsignedBigInteger('estado_bono_y_jus');
            $table->foreign('estado_bono_y_jus')->references('id')->on('estado_bono_y_jus');

            $table->unsignedBigInteger('estado_expediente_id');
            $table->foreign('estado_expediente_id')->references('id')->on('estado_expedientes')->default(1);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->date('fecha_culminacion')->nullable();

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
        Schema::dropIfExists('expedientes');
    }
}
