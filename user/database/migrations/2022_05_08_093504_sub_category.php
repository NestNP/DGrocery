<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('Sub_Category', function (Blueprint $table) {
        $table->foreign('id')->references('catid')->on('category')->onDelete('cascade');
        $table->id();
        $table->string('Sub_Category_name');
        $table->string('Slug');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
