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
        Schema::create('maintenance_tickets', function (Blueprint $table) {
             $table->id();

            $table->foreignId('room_id')->nullable()->constrained('rooms')->nullOnDelete();
            $table->string('title');
            $table->text('description')->nullable();

            $table->string('priority')->default('normal'); // low,normal,high,critical
            $table->string('status')->default('open');     // open,in_progress,resolved,closed

            $table->foreignId('created_by_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('assigned_to_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('resolved_at')->nullable();

            $table->timestamps();

            $table->index(['status','priority']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_tickets');
    }
};
