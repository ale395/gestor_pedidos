<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_detalle', function (Blueprint $table) {
            $table->integer('id_pedido')->unsigned();
            $table->integer('nro_detalle');
            $table->integer('id_producto');
            $table->integer('precio_unitario');
            $table->integer('cantidad');
            $table->integer('subtotal');
            $table->timestamps();
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
            $table->foreign('id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_detalle');
    }
}
