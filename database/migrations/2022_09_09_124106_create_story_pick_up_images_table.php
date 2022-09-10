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
        Schema::create('story_pick_up_images', function (Blueprint $table) {
            $table->id('story_pick_up_image_id');
            $table->unsignedBigInteger('story_pick_up_memory_id');
            $table->text('story_pick_up_image')->nullable();
            $table->timestamps();

            $table->foreign('story_pick_up_memory_id')->references('story_pick_up_memory_id')->on('story_pick_up_memories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('story_pick_up_images');
    }
};
