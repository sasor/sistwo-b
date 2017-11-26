<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefrescoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refresco', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_refresco_id');
            $table->integer('tipo_refresco_id');
            $table->double('precio');
            $table->integer('cantidad_unidades');
    
            $table->foreign('categoria_refresco_id')
                  ->references('id')
                  ->on('categoria_refresco');

            $table->foreign('tipo_refresco_id')
                  ->references('id')
                  ->on('tipo_refresco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refresco');
    }
}
