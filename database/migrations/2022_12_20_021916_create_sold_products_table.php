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
        Schema::create('sold_products', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->timestamps();
            #### claves foraneas
            $table->unsignedBigInteger('productId');
            $table->unsignedBigInteger('saleId');
            ### Creamos nuestra columna primero  
            $table->foreign('productId')->references('id')->on('products');
            $table->foreign('saleId')->references('id')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sold_products');
    }
};
