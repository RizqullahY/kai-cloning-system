<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('route_segments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('train_route_id');
            $table->unsignedBigInteger('from_station_id');
            $table->unsignedBigInteger('to_station_id');
            $table->integer('order'); 
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('duration_minutes');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_segments');
    }
};
