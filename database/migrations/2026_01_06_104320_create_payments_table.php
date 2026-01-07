<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('folio_id')->constrained('folios')->cascadeOnDelete();
            $table->foreignId('payment_method_id')->constrained('payment_methods')->restrictOnDelete();

            $table->decimal('amount', 12, 2);
            $table->string('currency',3)->default('USD');
            $table->timestamp('paid_at')->useCurrent();

            $table->string('status')->default('captured'); // pending,captured,failed,voided
            $table->string('reference')->nullable();
            $table->json('meta')->nullable();

            $table->foreignId('received_by_user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();

            $table->index(['folio_id','paid_at']);
            $table->index(['payment_method_id','status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
