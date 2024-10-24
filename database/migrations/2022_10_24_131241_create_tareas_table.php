<?php

use App\Models\Tarea;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();

            $table->boolean('asignada_a_expediente')->default(0);
            
            $table->unsignedBigInteger('expediente_id')->nullable();
            $table->foreign('expediente_id')->references('id')->on('expedientes')->onDelete('cascade');

            $table->unsignedBigInteger('estado_tarea_id');
            $table->foreign('estado_tarea_id')->references('id')->on('estado_tareas')->default(1);

            $table->text('juzgado');
            $table->longText('detalle');

            $table->unsignedBigInteger('relevancia_id');
            $table->foreign('relevancia_id')->references('id')->on('relevancias')->default(1);

            $table->date('fecha_vencimiento');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('tareas');
    }
}
