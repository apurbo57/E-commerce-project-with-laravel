<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->integer('cat_id');
            $table->integer('subcat_id');
            $table->string('product_name');
            $table->string('product_model');
            $table->string('product_color');
            $table->string('product_size');
            $table->integer('quantity');
            $table->integer('price');
            $table->decimal('special_price', 8, 2)->nullable();
            $table->date('sp_start')->nullable();
            $table->date('sp_end')->nullable();
            $table->string('image');
            $table->string('description');
            $table->string('long_description')->nullable();
            $table->integer('status')->default(0)->nullable();
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
        Schema::dropIfExists('tbl_products');
    }
}
