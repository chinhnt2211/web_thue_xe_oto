<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->unsignedBigInteger('address')->nullable();
            $table->foreign('address')->references('id')->on('locations');
            $table->string('phone_number',15);
            $table->string('hashed_password',32);
            $table->string('cic_number',12)->nullable();
            $table->unsignedBigInteger('cic_front')->nullable();
            $table->unsignedBigInteger('cic_back')->nullable();
            $table->foreign('cic_front')->references('id')->on('images');
            $table->foreign('cic_back')->references('id')->on('images');
            $table->date('dob');
            $table->tinyInteger('gender');
            $table->unsignedBigInteger('avatar')->nullable();
            $table->foreign('avatar')->references('id')->on('images');
            $table->tinyInteger('status');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
