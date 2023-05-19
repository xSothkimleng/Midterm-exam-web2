<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtCraftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_craft', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name');
            $table->string('last_name');
            $table->string('company_name');
            $table->string('email');
            $table->string('street_address');
            $table->string('street_address_2');
            $table->string('city');
            $table->string('state_province');
            $table->string('postal_code');
            $table->string('country');
            $table->string('accessories')->nullable();
            $table->string('art')->nullable();
            $table->string('bath')->nullable();
            $table->string('crochet')->nullable();
            $table->string('dolls')->nullable();
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art_craft');
    }
}
