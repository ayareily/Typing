<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('category_name');
            $table->string('problem0');
            $table->string('problem1')->nullable();
            $table->string('problem2')->nullable();
            $table->string('problem3')->nullable();
            $table->string('problem4')->nullable();
            $table->string('problem5')->nullable();
            $table->string('problem6')->nullable();
            $table->string('problem7')->nullable();
            $table->string('problem8')->nullable();
            $table->string('problem9')->nullable();
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
        Schema::dropIfExists('drills');
    }
}
