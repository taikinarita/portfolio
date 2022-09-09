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
            $table->unsignedBigInteger('story_schedule_id');
            $table->unsignedBigInteger('story_id');
            $table->integer('order')->nullable(false);
            $table->string('place_name')->nullable(false);
            $table->date('arrival_date')->nullable();
            $table->date('depature_date')->nullable();
            $table->timestamps();

            $table->primary('story_schedule_id');
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
