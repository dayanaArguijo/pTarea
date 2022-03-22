<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostreHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postre_h_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePostre');
            $table->enum('tamaño', array('G', 'M','P'));
            $table->enum('decoracion', array('frutas', 'jalea','galleta'));
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
        Schema::dropIfExists('postre_h_s');
    }
}
