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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders'); // ارتباط با جدول سفارشات
            $table->foreignId('product_id')->constrained('products'); // محصول مربوط به آیتم سفارش
            $table->integer('quantity'); // تعداد محصول
            $table->string('price'); // قیمت هر واحد از محصول
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
