<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id');
            $table->boolean('command_ability');
            $table->text('name');
            $table->text('description');
            $table->text('associated_phase')->nullable();
            $table->timestamps();
        });
    }
}
