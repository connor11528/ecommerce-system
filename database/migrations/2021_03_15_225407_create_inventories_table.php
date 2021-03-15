<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->unsignedBigInteger('quantity')->default(0);
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedInteger('price_cents')->nullable();
            $table->unsignedInteger('sale_price_cents')->nullable();
            $table->unsignedInteger('cost_cents')->nullable();
            $table->string('sku');
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->mediumText('note')->nullable();

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
        Schema::dropIfExists('inventories');
    }
}
