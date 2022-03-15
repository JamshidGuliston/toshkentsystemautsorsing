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
            $table->increments('id');
            $table->string('product_name');
            $table->integer('size_name_id')->references('id')->on('sizes');
            $table->integer('category_name_id')->references('id')->on('product_categories');
            $table->integer('norm_cat_id');
            $table->string('product_image');
            $table->double('div', 8, 3);
            $table->integer('sort');
            $table->integer('term');
            $table->double('product_oqsil', 8, 3);
            $table->double('product_yog', 8, 3);
            $table->double('product_uglevot', 8, 3);
            $table->double('product_ener', 8, 3);
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
