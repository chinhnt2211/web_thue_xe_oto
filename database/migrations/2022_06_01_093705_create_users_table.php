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
            $table->string('address')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->string('hashed_password', 32);
            $table->string('cic_front_url')->nullable();
            $table->string('cic_back_url')->nullable();
            $table->date('dob');
            $table->tinyInteger('gender')->default(1);
            $table->string('avatar_url')->nullable();
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
