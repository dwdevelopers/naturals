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
        if (!Schema::hasTable('product_details')) {
            Schema::create('product_details', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('product_id'); // Foreign key
                $table->string('name', 255);
                $table->string('slug', 255)->nullable();
                $table->text('description')->nullable();
                $table->enum('status', ['active', 'inactive'])->default('active');

                // Foreign key constraint (Reference to products table)
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
                $table->timestamps();
            });
         }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
