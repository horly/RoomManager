<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cash_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cash_register_id')->constrained('cash_registers')->cascadeOnDelete();

            $table->string('type'); // in,out,closure_open,closure_close
            $table->decimal('amount', 12, 2);
            $table->string('currency',3)->default('USD');

            $table->text('reason')->nullable();
            $table->string('reference')->nullable();

            $table->timestamp('moved_at')->useCurrent();
            $table->foreignId('performed_by_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->json('meta')->nullable();

            $table->timestamps();
            $table->index(['cash_register_id','moved_at']);
            $table->index(['type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_movements');
    }
};
