<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Product name');
            $table->string('Manufacturer name');
            $table->string('Manufacturer Brand')->nullable();
            $table->decimal('Price');
            $table->string('Category');
            $table->string('Features');
            $table->string('Product description')->nullable();
            $table->string('Product image')->nullable();
            $table->unsignedInteger('quantity')->default(10);
            $table->string('Meta data');
            $table->string('Meta title');
            $table->string('Meta keywords');
            $table->string('Meta description');
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
        Schema::dropIfExists('products');
    }
}
