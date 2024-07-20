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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Category::class)->constrained();
            $table->string('name');
            $table->string('sku')->unique();
            $table->string('overview')->nullable()->comment("mô tả ngắn");
            $table->text('img_thumb')->nullable()->comment("ảnh nhổ khi hiển thị danh sách");
            $table->longText('content')->nullable()->comment("noi dung");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
