<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{


    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_title');
            $table->string('title');
            $table->string('description');
            $table->text('content');
            $table->string('featured_image')->nullable();
            $table->string('icon_image')->nullable();
            $table->string('story_image')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('stories');
    }
}
