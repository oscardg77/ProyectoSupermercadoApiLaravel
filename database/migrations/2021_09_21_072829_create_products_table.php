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
            $table->integer(code);
            $table->char(name);
            $table->decimal(price);
            $table->integer(weight);
            $table->char(description);
            $table->binary(image);
            $table->integer(id_category);
            $table->integer(stock);
            $table->timestamps();

            $table->foreign('id_category')->references('id')->on('category');

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
