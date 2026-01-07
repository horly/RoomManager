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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained()->cascadeOnDelete();
            $table->foreignId('guest_id')->constrained('guests')->restrictOnDelete();

            $table->uuid('code')->unique();
            $table->string('status')->default('pending');
            // pending,confirmed,checked_in,checked_out,cancelled,no_show

            $table->date('check_in_date');
            $table->date('check_out_date');

            $table->unsignedSmallInteger('adults')->default(1);
            $table->unsignedSmallInteger('children')->default(0);

            $table->string('source')->default('frontdesk');
            $table->text('special_requests')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['hotel_id','status']);
            $table->index(['hotel_id','check_in_date','check_out_date']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
