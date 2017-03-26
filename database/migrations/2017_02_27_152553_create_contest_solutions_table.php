<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_solutions', function (Blueprint $table) {
            $table->collation ='utf8_unicode_ci';
            $table->charset = 'utf8';
            $table->unsignedInteger('solution_id')->primary();
            $table->bigInteger('solved_at');

            $table->timestamps();
            $table->foreign('solution_id')
                ->references('id')->on('solutions')
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
        Schema::dropIfExists('contest_solutions');
    }
}
