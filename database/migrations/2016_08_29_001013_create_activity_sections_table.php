<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitySectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->timestamp('active_date');
            $table->timestamp('desactive_date');
            $table->integer('id_activity')->unsigned();
            $table->foreign('id_activity')->references('id')->on('activities');
            $table->integer('id_section')->unsigned();
            $table->foreign('id_section')->references('id')->on('sections');
            $table->integer('id_student')->unsigned();
            $table->foreign('id_student')->references('id')->on('users');
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
        Schema::drop('activity_sections');
    }
}
