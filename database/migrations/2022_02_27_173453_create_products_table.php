<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id')->comment('pK');
            $table->string('products_name')->unique();;
            $table->integer('products_item_id')->comment('FK');
            $table->decimal('purchase_price', 5, 2);
            $table->decimal('retail_price', 5, 2);
            $table->string('product_image');
            $table->integer('products_item_type_id')->comment('FK');;
            $table->string('product_desc');
            $table->integer('products_category_id')->comment('FK');;
            $table->boolean('product_status');
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
};
