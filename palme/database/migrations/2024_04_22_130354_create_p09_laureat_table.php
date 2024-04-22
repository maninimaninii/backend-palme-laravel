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
        Schema::create('p09_laureat', function (Blueprint $table) {
            $table->integer('idLaureat', true);
            $table->string('nomLaureat', 91);
            $table->string('sexe', 10)->nullable();
            $table->string('pays', 60)->nullable();
            $table->string('metier', 60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p09_laureat');
    }
};
