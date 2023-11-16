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
        Schema::create('2121110052_orderdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order_id')->comment('mã đơn hàng');
            $table->unsignedInteger('product_id')->comment('mã sản phẩm');
            $table->float('price', 8, 2)->comment('giá');
            $table->unsignedInteger('qty');
            $table->float('amount', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('2121110052_orderdetail');
    }
};
