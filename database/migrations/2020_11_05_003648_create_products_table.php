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
            $table->string('nombre');
            $table->foreignId('idFabricante');
            $table->foreignId('idCategoria');
            $table->double('precioMin', 8, 2);
            $table->double('precioMax', 8, 2);
            $table->integer('pedidoMin');
            $table->integer('pedidoMax');
            $table->string('color');
            $table->string('talla');
            $table->boolean('destacado')->default(0);
            $table->boolean('estado')->default(0);
            $table->text('descripcion')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('idFabricante')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idCategoria')->references('id')->on('categories')->onDelete('cascade');
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
