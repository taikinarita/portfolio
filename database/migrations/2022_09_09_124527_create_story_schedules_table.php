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
        Schema::create('story_schedules', function (Blueprint $table) {
            $table->id('story_schedule_id');
            $table->unsignedBigInteger('story_id');
            $table->integer('order')->nullable(false);
            $table->string('place_name')->nullable(false);
            $table->string('arrival_date')->nullable();
            $table->string('departure_date')->nullable();
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
        Schema::dropIfExists('story_schedules');
    }
};
