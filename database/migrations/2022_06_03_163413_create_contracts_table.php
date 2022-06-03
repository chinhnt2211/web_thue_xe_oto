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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('admin_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
            $table->tinyInteger('status');
            $table->unsignedBigInteger('contract_image')->nullable();
            $table->foreign('contract_image')->references('id')->on('images');
            $table->unsignedInteger('price');
            $table->unsignedTinyInteger('deposit_percent')->nullable();
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('contracts');
    }
};
