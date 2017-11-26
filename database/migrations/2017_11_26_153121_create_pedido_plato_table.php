<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoPlatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_plato', function (Blueprint $table) {
            $table->integer('pedido_id');
            $table->integer('plato_id');

            $table->foreign('pedido_id')->references('id')->on('pedido');
            $table->foreign('plato_id')->references('id')->on('plato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_plato');
    }
}
