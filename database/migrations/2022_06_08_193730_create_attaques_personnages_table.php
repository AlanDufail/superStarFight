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
        Schema::create('attaques_personnages', function (Blueprint $table) {
            $table->integer('attaque_id')->unsigned();
            $table->integer('personnage_id')->unsigned();
            $table->foreign('attaque_id')->references('id')->on('attaques')->onDelete('cascade');
            $table->foreign('personnage_id')->references('id')->on('personnages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attaques_personnages');
    }
};
