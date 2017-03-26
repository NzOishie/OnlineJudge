<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_problems', function (Blueprint $table) {
            $table->collation ='utf8_unicode_ci';
            $table->charset = 'utf8';
            $table->increments('id');
            $table->unsignedInteger('contest_id');
            $table->unsignedInteger('problem_id');
            $table->integer('points');
            $table->timestamps();

            $table->unique(['contest_id', 'problem_id']);
            $table->foreign('contest_id')
                ->references('id')->on('contests')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('problem_id')
                ->references('id')->on('problems')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contest_problems');
    }
}
