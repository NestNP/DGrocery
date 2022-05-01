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
            $table->string('Category');
            $table->string('Features');
            $table->string('Product_description')->nullable();
            $table->string('Product_image')->nullable();
            $table->unsignedInteger('quantity')->default(10);
            $table->string('Meta_data');
            $table->string('Meta_title');
            $table->string('Meta_keywords');
            $table->string('Meta_description');
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
