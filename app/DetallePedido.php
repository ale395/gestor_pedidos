<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    //tabla con la que vamos a trabajar
    protected $table = 'pedidos_detalle';

    //primary key de la tabla con la que trabajaremos
    protected $primaryKey = 'id_pedido'


    //solo Dios sabe para que es esto, yo hago nomas
    public $timestamps = false;

    protected $fillable = [
    	'nro_detalle',
    	'id_producto',
    	'precio_unitario',
    	'cantidad',
    	'subtotal'
    ];

    protected $guarded = [
    ];
}
