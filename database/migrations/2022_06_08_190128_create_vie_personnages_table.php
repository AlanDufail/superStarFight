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
        Schema::create('vie_personnages', function (Blueprint $table) {
            $table->increments('id')
                ->unsigned();
            $table->integer('combat_id')
                ->unsigned();
            $table->foreign('combat_id')
                ->references('id')
                ->on('combat_personnages')
                ->onDelete('cascade');
            $table->integer('vie_personnage1');
            $table->integer('vie_personnage2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vie_personnages');
    }
};
