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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_product_id')->constrained('main_products')->onDelete('cascade');
            $table->foreignId('sub_category_id')->constrained('sub_categories')->onDelete('cascade');
            $table->foreignId('sub_sub_category_id')
      ->nullable()
      ->default(NULL)
      ->constrained('sub_sub_categories')
      ->onDelete('cascade');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('accordion_heading1')->nullable();
            $table->longText('accordion_description1')->nullable();
            $table->string('accordion_heading2')->nullable();
            $table->longText('accordion_description2')->nullable();
            $table->string('accordion_heading3')->nullable();
            $table->longText('accordion_description3')->nullable();
            $table->string('accordion_heading4')->nullable();
            $table->longText('accordion_description4')->nullable();
            $table->string('accordion_heading5')->nullable();
            $table->longText('accordion_description5')->nullable();
            $table->string('accordion_heading6')->nullable();
            $table->longText('accordion_description6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
