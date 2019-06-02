<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('home');
            $table->timestamps();
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('sale_date');
            $table->integer('sale_discount');
            $table->integer('price');
            $table->timestamps();
        });

        Schema::create('sale_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('sale_date');
            $table->integer('product_discount');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('name');
            $table->integer('price');
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('name');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('name');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('name');
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
        Schema::dropIfExists('phones');
        Schema::dropIfExists('address');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('sales');
        Schema::dropIfExists('sale_details');
        Schema::dropIfExists('products');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('category');
    }
}

