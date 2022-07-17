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
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->foreignId('location_id');
            $table->string('phone',15);
            $table->string('password');
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
