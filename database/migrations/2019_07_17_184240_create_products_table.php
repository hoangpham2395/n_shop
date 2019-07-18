<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('product_code', 10);
            $table->string('product_name', 255);
            $table->string('product_slug', 255);
            $table->string('made_in', 128)->nullable();
            $table->string('material', 255)->nullable();
            $table->integer('price');
            $table->text('content')->nullable();
            $table->text('sale')->nullable();
            $table->integer('price_sale')->nullable();
            $table->integer('ins_id')->nullable();
            $table->integer('upd_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
