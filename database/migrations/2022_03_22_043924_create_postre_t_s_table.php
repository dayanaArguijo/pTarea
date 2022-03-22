<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostreTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postre_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePostre');
            $table->enum('tamaño', array('G', 'M','P'));
            $table->enum('tipoRelleno', array('caramelo', 'bettun'));
            $table->integer('precio');
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
        Schema::dropIfExists('postre_t_s');
    }
}
