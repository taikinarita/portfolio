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
        Schema::create('story_main_pictures', function (Blueprint $table) {
            $table->id('story_main_picture_id');
            $table->unsignedBigInteger('story_id');
            $table->text('main_impression_image')->nullable();
            $table->timestamps();

            $table->foreign('story_id')->references('story_id')->on('stories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('story_main_pictures');
    }
};
