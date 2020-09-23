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
            $table->char('model_number');
            $table->unsignedBigInteger('category_id')->default(1);
            $table->string('department_name');
            $table->string('manufacturer_name');
            $table->bigInteger('upc');
            $table->integer('sku');
            $table->decimal('regular_price',10,2);
            $table->decimal('sale_price',10,2);
            $table->text('description')->nullable();
            $table->text('url');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');

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
