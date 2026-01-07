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
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->string('action');       // created,updated,checked_in...
            $table->string('entity_type');  // Reservation, Room, Payment...
            $table->unsignedBigInteger('entity_id')->nullable();

            $table->json('before')->nullable();
            $table->json('after')->nullable();

            $table->string('ip')->nullable();
            $table->string('user_agent')->nullable();

            $table->timestamps();

            $table->index(['entity_type','entity_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};
