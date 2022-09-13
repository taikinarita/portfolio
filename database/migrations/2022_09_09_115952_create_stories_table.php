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
        Schema::create('stories', function (Blueprint $table) {
            $table->id('story_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->string('date_first')->nullable();
            $table->string('date_last')->nullable();
            $table->string('period')->nullable();
            $table->integer('number_of_people')->nullable();
            $table->text('main_image')->nullable();
            $table->text('main_impression')->nullable();
            $table->text('remarks')->nullable();
            $table->integer('public_status')->nullable(false);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('app_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stories');
    }
};
