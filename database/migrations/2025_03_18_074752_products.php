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
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->text('image');
            $table->foreignId('category_id')->constrained('categories'); // ارتباط با دسته‌بندی
            $table->foreignId('store_id')->constrained('stores'); // ارتباط با فروشگاه
            $table->integer('stock'); // موجودی انبار
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
