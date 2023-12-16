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
        Schema::create('2121110060_user', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->comment('tên người dùng');
            $table->string('email',255)->comment('email người dùng');
            $table->string('phone',255)->comment('sdt người dùng');
            $table->string('username',255)->unique()->comment('tên đăng nhập người dùng');
            $table->string('password',255)->unique()->comment('mật khẩu người dùng');
            $table->string('address',255)->comment('địa chỉ');
            $table->string('image',255)->comment('ảnh đại diện');
            $table->string('roles',255)->comment('chức năng người dùng');
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('update_by')->default(1);
            $table->tinyInteger('status')->default(2)->comment('trạng thái');
            $table->timestamps();//create at,update at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('2121110060_user');
    }
};
