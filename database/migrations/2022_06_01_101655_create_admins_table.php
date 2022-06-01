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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('address');
            $table->string('phone_number', 15);
            $table->string('hashed_password', 32);
            $table->string('cic_front_url');
            $table->string('cic_back_url');
            $table->date('dob');
            $table->tinyInteger('gender');
            $table->string('avatar_url');
            $table->tinyInteger('role');
            $table->tinyInteger('status');
            $table->foreignId('station_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
