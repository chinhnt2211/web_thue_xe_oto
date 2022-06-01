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
            $table->string('name')->unique();
            $table->tinyInteger('status')->unique();
            $table->text('description');
            $table->string('license_number',15);
            $table->tinyInteger('seat_capacity');
            $table->integer('price',false,true);
            $table->integer('rent_price',false,true);
            $table->foreignId('station_id')->constrained();
            $table->foreignId('brand_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
