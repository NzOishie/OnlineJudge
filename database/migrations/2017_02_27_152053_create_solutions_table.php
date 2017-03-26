<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->collation ='utf8_unicode_ci';
            $table->charset = 'utf8';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('problem_id');
            $table->double('execution_time');
            $table->string('language');
            $table->string('status');
            $table->timestamps();
            $table->foreign('problem_id')
                ->references('id')->on('problems')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('solutions');
    }
}
