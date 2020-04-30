<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_asig_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('prioridad_id');
            $table->unsignedBigInteger('estatus_id')->default(3);;
            $table->string('titulo');
            $table->text('descripcion');
            $table->date('fecha_inicio');
            // $table->date('fecha_inicio')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->timestamp('fecha_inicio')->useCurrent = true;
            // $table->date('fecha_inicio')->default(DB::raw('NOW()'));
            $table->date('fecha_termino');

            $table->timestamps();

            //Mantener la intregidad de la base de datoso|ondelete borra todo lo que este relacionado al el
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
}
