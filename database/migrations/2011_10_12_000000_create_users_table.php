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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role',['admin','penjual','pembeli'])->default('pembeli');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

// Schema::create('users', function (Blueprint $table) {
//     $table->id('user_id');
//     $table->string('username');
//     $table->string('password');
//     $table->string('role');
//     $table->unsignedBigInteger('admin_id')->nullable();
//     $table->unsignedBigInteger('pembeli_id')->nullable();
//     $table->foreign('admin_id')->references('admin_id')->on('admin');
//     $table->foreign('pembeli_id')->references('pembeli_id')->on('pembeli');
// });
