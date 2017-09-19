<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('transaction_id')->unique()->nullable();
            $table->decimal('amount', 15, 2)->nullable();
            $table->string('reference')->nullable();
            $table->string('authorization_code')->nullable();
            $table->string('company')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('payment_method');
            $table->timestamp('transaction_date')->nullable();
            $table->enum('status', ['payed','received', 'cancelled', 'delivered', 'on hold'])->default('on hold');
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
}
