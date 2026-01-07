<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cash_registers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained()->cascadeOnDelete();
            $table->string('name'); // "Front Desk"
            $table->string('code'); // FD-1
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->unique(['hotel_id','code']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_registers');
    }
};
