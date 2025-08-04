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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('type')->nullable();
            $table->string('bhk')->nullable();
            $table->string('stype')->nullable();
            $table->unsignedBigInteger('bedroom')->default(0);
            $table->unsignedBigInteger('bathroom')->default(0);
            $table->unsignedBigInteger('balcony')->default(0);
            $table->unsignedBigInteger('kitchen')->default(0);
            $table->unsignedBigInteger('hall')->default(0);
            $table->string('floor')->nullable();
            $table->string('size')->nullable();
            $table->double('price',15,2)->nullable();
            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->text('feature')->nullable();
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('status')->nullable();
            $table->string('mapimage')->nullable();
            $table->string('topmapimage')->nullable();
            $table->string('groundmapimage')->nullable();
            $table->string('totalfloor')->nullable();
            $table->unsignedBigInteger('isfeatured')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
