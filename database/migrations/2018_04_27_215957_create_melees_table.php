<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeleesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('melees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id');
            $table->text('name');
            $table->text('range');
            $table->text('attacks');
            $table->text('to_hit');
            $table->text('to_wound');
            $table->text('rend');
            $table->text('damage');
            $table->timestamps();
        });
    }
}
