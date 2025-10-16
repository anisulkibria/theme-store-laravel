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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('price');
            $table->string('rating');
            $table->text('description');
            $table->string('detail_url');
            $table->string('demo_url')->nullable();
            $table->string('purchase_url');
            $table->string('sales')->nullable();
            $table->text('full_description')->nullable();
            $table->json('key_benefits')->nullable();
            $table->json('technical_details')->nullable();
            $table->json('features')->nullable();
            $table->json('design_features')->nullable();
            $table->json('technical_features')->nullable();
            $table->json('preview_images')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
