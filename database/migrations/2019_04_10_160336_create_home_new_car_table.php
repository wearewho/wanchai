<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeNewCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_new_car', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image_name');
            $table->integer('image_size');
            $table->text('image_url');
            $table->text('newcar_header');
            $table->text('newcar_detail');
            $table->text('property_header');
            $table->text('property_detail');
            $table->text('review_header');
            $table->text('review_detail');
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
        Schema::dropIfExists('home_new_car');
    }
}
