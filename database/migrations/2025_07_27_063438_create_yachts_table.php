<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('yachts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->decimal('price_per_day', 8, 2);
            $table->integer('length'); // u metrima
            $table->integer('max_guests');
            $table->integer('cabins');
            $table->decimal('rating', 2, 1)->nullable();
            $table->integer('reviews_count')->default(0);
            $table->string('image_url')->nullable();
            $table->boolean('has_skipper')->default(false);
            $table->boolean('has_crew')->default(false);
            $table->boolean('has_catering')->default(false);
            $table->boolean('has_watersports')->default(false);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yachts');
    }
};