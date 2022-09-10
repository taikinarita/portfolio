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
        Schema::create('app_users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('password')->nullable(false);
            $table->integer('age')->nullable();
            $table->integer('sex')->nullable();
            $table->string('best_place')->nullable();
            $table->string('wish_place')->nullable();
            $table->text('introduction')->nullable();
            $table->integer('good')->nullable();
            $table->integer('bookmark')->nullable();
            $table->timestamps();

            $table->unique(['email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_users');
    }
};
