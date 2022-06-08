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
        Schema::create('combats_personnages', function (Blueprint $table) {
            $table->increments('combat_id')
                ->unsigned()
                ->index();

            $table->integer('personnage_id')
                ->unsigned()
                ->index();
            $table->foreign('personnage_id')
                ->references('id')
                ->on('personnages')
                ->onDelete('cascade');

            $table->integer('personnage2_id')
                ->unsigned()
                ->index();
            $table->foreign('personnage2_id')
                ->references('id')
                ->on('personnages')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combats_personnages');
    }
};
