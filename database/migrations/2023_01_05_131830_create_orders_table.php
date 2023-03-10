<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');            
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('customer_id')->nullable();            
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->enum('status', ['pending', 'processing', 'cancelled','returned', 'completed'])->default('pending');
            $table->unsignedBigInteger('payment_method')->nullable();             
            $table->foreign('payment_method')->references('id')->on('payment_methods');
            $table->integer('amount')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
