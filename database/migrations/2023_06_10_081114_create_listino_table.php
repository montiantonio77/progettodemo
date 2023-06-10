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
        Schema::create('listino', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('point_id');
            $table->unsignedBigInteger('servizio_id');
            $table->decimal('prezzo', 8, 2);
            $table->boolean('attivo')->default(true);
            $table->foreign('point_id')->references('id')->on('point')->onDelete('cascade');
            $table->foreign('servizio_id')->references('id')->on('servizio')->onDelete('cascade');
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
        Schema::dropIfExists('listino');
    }
};
