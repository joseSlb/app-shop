<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->increments('id');

           
            $table->integer('quantity');
            $table->integer('discount')->default(0); // % int *para el descuento*
            // FK header *clave foranea referencia a campo id en tabla cart*
            $table->integer('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')->on('carts');

            // FK product *calve foranea para asociar detalle con un producto
            $table->unsignedBigInteger('product_id')->unsigned();  // ¡laravel no usa mas BigIncrement, remplazar por unsignedBigInteger!.
            $table->foreign('product_id')->references('id')->on('products');
            
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
        Schema::dropIfExists('cart_details');
    }
}
