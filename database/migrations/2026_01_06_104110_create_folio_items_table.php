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
        Schema::create('folio_items', function (Blueprint $table) {
             $table->id();
            $table->foreignId('folio_id')->constrained('folios')->cascadeOnDelete();

            $table->string('type')->default('charge'); // charge,tax,discount,adjustment
            $table->string('category')->nullable();     // room,minibar,spa,other
            $table->string('label');
            $table->date('service_date')->nullable();

            $table->decimal('qty', 10, 2)->default(1);
            $table->decimal('unit_price', 12, 2)->default(0);
            $table->decimal('total', 12, 2)->default(0);

            $table->boolean('is_taxable')->default(false);
            $table->json('meta')->nullable();

            $table->foreignId('created_by_user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
            $table->index(['folio_id','type']);
            $table->index(['folio_id','category']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folio_items');
    }
};
