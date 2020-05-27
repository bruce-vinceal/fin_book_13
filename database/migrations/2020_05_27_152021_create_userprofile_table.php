<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('email');
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('birthday');
            $table->string('sex');
            $table->json('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userprofile');
    }
}
