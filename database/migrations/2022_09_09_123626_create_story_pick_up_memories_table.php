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
        Schema::create('story_pick_up_memories', function (Blueprint $table) {
            $table->unsignedBigInteger('story_pick_up_memory_id');
            $table->unsignedBigInteger('story_id');
            $table->string('story_pick_up_memory_title')->nullable();
            $table->text('story_pick_up_memory_image')->nullable();
            $table->timestamps();

            $table->primary('story_pick_up_memory_id');
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
        Schema::dropIfExists('story_pick_up_memories');
    }
};
