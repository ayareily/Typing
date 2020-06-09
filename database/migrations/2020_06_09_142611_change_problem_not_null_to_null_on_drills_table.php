<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeProblemNotNullToNullOnDrillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drills', function (Blueprint $table) {
            $table->text('problem1')->nullable()->change();
            $table->text('problem2')->nullable()->change();
            $table->text('problem3')->nullable()->change();
            $table->text('problem4')->nullable()->change();
            $table->text('problem5')->nullable()->change();
            $table->text('problem6')->nullable()->change();
            $table->text('problem7')->nullable()->change();
            $table->text('problem8')->nullable()->change();
            $table->text('problem9')->nullable()->change();//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drills', function (Blueprint $table) {
            $table->text('problem1')->nullable(false)->change();
            $table->text('problem2')->nullable(false)->change();
            $table->text('problem3')->nullable(false)->change();
            $table->text('problem4')->nullable(false)->change();
            $table->text('problem5')->nullable(false)->change();
            $table->text('problem6')->nullable(false)->change();
            $table->text('problem7')->nullable(false)->change();
            $table->text('problem8')->nullable(false)->change();
            $table->text('problem9')->nullable(false)->change();//
        });
    }
}
