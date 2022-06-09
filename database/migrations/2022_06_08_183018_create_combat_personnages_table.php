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
        Schema::create('combat_personnages', function (Blueprint $table) {
            $table->increments('id')
                ->unsigned()
                ->index();

            $table->integer('personnage_id')
                ->nullable()
                ->unsigned()
                ->index();
            $table->foreign('personnage_id')
                ->nullable()
                ->references('id')
                ->on('personnages')
                ->onDelete('cascade');

            $table->integer('personnage2_id')
                ->nullable()
                ->unsigned()
                ->index();
            $table->foreign('personnage2_id')
                ->nullable()
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
        Schema::dropIfExists('combat_personnages');
    }
};
