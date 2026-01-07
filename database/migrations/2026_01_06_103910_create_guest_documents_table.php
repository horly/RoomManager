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
        Schema::create('guest_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained('guests')->cascadeOnDelete();
            $table->string('type');  // passport,id_card
            $table->string('number');
            $table->date('issued_at')->nullable();
            $table->date('expires_at')->nullable();
            $table->string('country',2)->nullable();
            $table->timestamps();
            $table->index(['type','number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_documents');
    }
};
