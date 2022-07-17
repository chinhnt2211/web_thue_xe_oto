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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('status');
            $table->text('description');
            $table->string('license_number',15);
            $table->unsignedInteger('price');
            $table->unsignedInteger('rent_price');
            $table->unsignedInteger('fine');
            $table->foreignId('station_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('seating_capacity_id')->constrained();
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
        Schema::dropIfExists('vehicle');
    }
};
