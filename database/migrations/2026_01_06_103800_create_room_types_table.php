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
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->unsignedSmallInteger('capacity_adults')->default(2);
            $table->unsignedSmallInteger('capacity_children')->default(0);
            $table->decimal('base_price', 10, 2)->default(0);
            $table->text('description')->nullable();
            $table->json('features')->nullable();
            $table->timestamps();
            $table->index(['hotel_id','name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_types');
    }
};
