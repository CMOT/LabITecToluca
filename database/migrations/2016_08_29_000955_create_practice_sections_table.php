<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->timestamp('active_date');
            $table->timestamp('desactive_date');
            $table->integer('id_section')->unsigned();
            $table->foreign('id_section')->references('id')->on('sections');
            $table->integer('id_student')->unsigned();
            $table->foreign('id_student')->references('id')->on('users');
            $table->integer('id_practice_detail')->unsigned();
            $table->foreign('id_practice_detail')->references('id')->on('practice_details');
            $table->integer('id_practice')->unsigned();
            $table->foreign('id_practice')->references('id')->on('practices');
            $table->char('status', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('practice_sections');
    }
}
