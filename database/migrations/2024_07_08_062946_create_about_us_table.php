<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('short')->nullable();
            $table->text('story')->nullable();
            $table->text('story_text')->nullable();
            $table->text('mission')->nullable();
            $table->text('mission_short')->nullable();
            $table->text('value')->nullable();
            $table->text('value_short')->nullable();
            $table->text('smt_one')->nullable();
            $table->text('smt_one_color')->nullable();
            $table->text('smt_two')->nullable();
            $table->text('smt_two_color')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
