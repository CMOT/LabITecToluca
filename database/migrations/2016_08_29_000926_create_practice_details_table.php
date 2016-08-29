<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->timestamp('init_date');
            $table->timestamp('end_date');
            $table->integer('percent');
            $table->double('results', 3, 2);
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
        Schema::drop('practice_details');
    }
}
