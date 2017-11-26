<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoRefrescoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_refresco', function (Blueprint $table) {
            $table->integer('pedido_id');
            $table->integer('refresco_id');
            
            $table->foreign('pedido_id')->references('id')->on('pedido');
            $table->foreign('refresco_id')->references('id')->on('refresco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_refresco');
    }
}
