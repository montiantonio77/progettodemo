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
        Schema::create('point', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('azienda_id');
            $table->string('nome');
            $table->string('indirizzo');
            $table->string('cap');
            $table->string('provincia');
            $table->string('regione');
            $table->string('email');
            $table->string('telefono');
            $table->foreign('azienda_id')->references('id')->on('azienda')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point');
    }
};
