<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class M1Comics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('collection_id');
            $table->string('name');
            $table->string('author');
            $table->string('price');
            $table->string('description');
            $table->string('publisher');
            $table->string('type');
            $table->string('edition');  
            $table->string('image');   
            $table->string('state', 1); 
            $table->timestamps();  

            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('collection_id')->references('id')->on('collections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
