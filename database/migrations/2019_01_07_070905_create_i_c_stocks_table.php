<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateICStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_c_stocks', function (Blueprint $table) {
               
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->nullable();
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->nullable();
            $table->string('unit')->nullable();
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('used_quantity')->nullable();
            $table->unsignedInteger('minimum_qty')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_c_stocks');
    }
}
