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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('brand');
            $table->string('model');
            $table->string('body_type');
            $table->string('transmission');
            $table->string('fuel_type');
            $table->string('color');
            $table->string('engine');
            $table->unsignedTinyInteger('month');
            $table->year('year');
            $table->string('ownership_type');
            $table->string('condition');
            $table->integer('driven');
            $table->decimal('price', 10, 2);
            $table->unsignedTinyInteger('is_price_negotiable')->default(0);
            $table->enum('status', ['published', 'sold', 'archived'])->default('published');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
