<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customerName');
            $table->string('streetAddress');
            $table->string('city');
            $table->string('state');
            $table->string('zipCode');
            $table->string('itemName');
            $table->string('size');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('subtotal');
            $table->integer('shipping');
            $table->integer('total');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
