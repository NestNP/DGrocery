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
            $table->string('Product_name');
            $table->string('Manufacturer_name');
            $table->string('Manufacturer_Brand')->nullable();
            $table->decimal('Price');
            $table->string('Category')->nullable();
            $table->string('Features')->nullable();
            $table->string('Product_details')->nullable();
            $table->string('Product_description')->nullable();
            $table->unsignedInteger('quantity')->default(10);
            $table->string('Product_image')->nullable();
            $table->string('Featured_image')->nullable();
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
