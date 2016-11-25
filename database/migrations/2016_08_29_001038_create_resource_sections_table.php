<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_resource')->unsigned();
            $table->foreign('id_resource')->references('id')->on('resources');
            $table->integer('id_section')->unsigned();
            $table->foreign('id_section')->references('id')->on('sections');
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
        Schema::drop('resource_sections');
    }
}
