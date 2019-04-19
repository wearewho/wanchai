<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id');
            $table->text('image_name');
            $table->integer('image_size');
            $table->text('image_url');
            $table->timestamps();
            //$table->foreign('blog_id')->references('id')->on('blog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_image');
    }
}
