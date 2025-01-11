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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');  // Foreign key column (must be unsignedBigInteger)
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');  // Foreign key constraint
            
            $table->unsignedBigInteger('product_id');  // Foreign key column (must be unsignedBigInteger)
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');  // Foreign key constraint
            
            $table->decimal('total_payment', 8, 2);  // Total payment amount, stored as decimal (8 digits, 2 decimals)
            $table->integer('quantity');  // Quantity of the product ordered
            $table->timestamps();  // Created_at and updated_at timestamps        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Drop the foreign keys
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['product_id']);
        });
    }
};
