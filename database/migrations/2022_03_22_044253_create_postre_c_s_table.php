<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostreCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postre_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePostre');
            $table->enum('tamaño', array('G', 'M','P'));
            $table->enum('decoracion', array('tradicional', 'personalizada'));
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
        Schema::dropIfExists('postre_c_s');
    }
}
