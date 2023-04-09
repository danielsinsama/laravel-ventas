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
            $table->id();
            $table->float('precioventa', 8, 2);
            $table->float('preciocompra', 8, 2);
            $table->string('nombre',50);
            $table->string('descripcion',100);
            $table->integer('stock');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories');
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
