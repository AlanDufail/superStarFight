<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attaques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('type');
            $table->integer('degats');
            $table->integer('precision');
            $table->integer('critique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attaques');
    }
};
