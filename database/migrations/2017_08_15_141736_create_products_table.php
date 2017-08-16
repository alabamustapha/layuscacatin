<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('SKU')->unique()->nullable();
            $table->string('title')->unique();
            $table->text('description');
            $table->decimal('price');
            $table->string('thumbnail');
            $table->enum('status', ['new', 'on_sale', 'out_of_stock', 'discontinued']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
