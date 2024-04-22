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
        Schema::create('p09_film', function (Blueprint $table) {
            $table->integer('idFilm', true);
            $table->string('titreFilm', 140);
            $table->string('paysFilm', 60)->nullable();
            $table->integer('idRealisateur')->index('idRealisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p09_film');
    }
};
