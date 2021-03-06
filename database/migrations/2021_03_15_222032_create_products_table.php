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
            $table->string('product_name')->index();
            $table->longText('description')->nullable();
            $table->string('style')->nullable();
            $table->string('brand')->nullable();
            $table->string('url')->nullable();
            $table->string('product_type')->nullable();
            $table->unsignedInteger('shipping_price')->nullable();
            $table->mediumText('note')->nullable();
            $table->foreignId('admin_id')->index();
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
