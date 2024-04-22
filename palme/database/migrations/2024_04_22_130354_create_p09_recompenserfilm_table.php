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
        Schema::create('p09_recompenserfilm', function (Blueprint $table) {
            $table->integer('idFilm');
            $table->integer('idPrix')->index('idPrix');
            $table->date('editionPrixF')->nullable();

            $table->primary(['idFilm', 'idPrix']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p09_recompenserfilm');
    }
};
