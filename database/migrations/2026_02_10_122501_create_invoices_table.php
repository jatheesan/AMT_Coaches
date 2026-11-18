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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_ref')->unique();
            $table->string('client_name');
            $table->text('client_address');
            $table->integer('passengers');
            $table->date('travel_date');
            $table->date('issued_date');
            $table->date('due_date');
            $table->string('pickup_times');
            $table->string('return_times');
            $table->decimal('discount_amount', 10 ,2)->default(0);
            $table->decimal('total_amount', 10, 2)->default(0);
            $table->timestamps();
        });

        // 2. The line items (Coach, Food, Drinks, etc.)
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade');
            $table->string('description'); // e.g., "Coach Service" or "Drinks"
            $table->integer('qty')->default(1);
            $table->decimal('rate', 10, 2);
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
