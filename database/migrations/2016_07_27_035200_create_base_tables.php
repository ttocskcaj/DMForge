<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('npcs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('gender');
            $table->string('race');
            $table->string('sub_race');
            $table->string('class');
            $table->string('alignment');
            $table->text('description');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('project')->unsigned();
            $table->foreign('project')->references('id')->on('projects');
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->integer('parent')->unsigned()->null();
            $table->foreign('parent')->references('id')->on('locations');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users');
            $table->integer('project')->unsigned();
            $table->foreign('project')->references('id')->on('projects');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
        Schema::dropIfExists('npcs');
        Schema::dropIfExists('projects');

    }
}
