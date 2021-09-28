<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class M1Bills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('comic_id');
            $table->boolean('state');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('comic_id')->references('id')->on('comics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
