<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// namespace App\Http\Controllers\admin\DB; 
// use Illuminate\Support\Facades\DB;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('Category', function (Blueprint $table) {
        $table->id();
        $table->string('Category_name');
        $table->string('Slug');
        
    });
        //
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
                