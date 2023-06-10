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
        Schema::create('rel_servizio_listino', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servizio_id');
            $table->unsignedBigInteger('listino_id');
            $table->foreign('servizio_id')->references('id')->on('servizio')->onDelete('cascade');
            $table->foreign('listino_id')->references('id')->on('listino')->onDelete('cascade');
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
        Schema::dropIfExists('rel_servizio_listino');
    }
};
