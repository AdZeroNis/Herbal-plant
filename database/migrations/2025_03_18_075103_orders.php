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
            $table->foreignId('user_id')->constrained('users'); // کاربر مربوط به سفارش
            $table->string('shipping_address'); // آدرس ارسال
            $table->string('total_price'); // مجموع قیمت سفارش
            $table->enum('status', ['processing', 'shipped', 'delivered', 'canceled'])->default('processing'); // وضعیت سفارش
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
