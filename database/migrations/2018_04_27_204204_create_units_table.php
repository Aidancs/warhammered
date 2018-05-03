<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('description');
            $table->integer('move');
            $table->integer('save');
            $table->integer('wounds');
            $table->integer('bravery');
            $table->boolean('fly');
            $table->boolean('alive');
            $table->integer('number_of_models');
            $table->integer('number_of_wounds_left');
            $table->timestamps();
        });
    }
}
