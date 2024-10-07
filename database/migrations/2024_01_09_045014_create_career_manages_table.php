<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_manages', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->string('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('github')->nullable();
            $table->text('portfolio_any')->nullable();
            $table->text('ex')->nullable();
            $table->string('resume')->nullable();
            $table->string('accecpt_condition')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('career_manages');
    }
}
