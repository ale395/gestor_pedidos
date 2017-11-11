<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //tabla con la que vamos a trabajar
    protected $table = 'pedidos';

    //primary key de la tabla con la que trabajaremos
    protected $primaryKey = 'id_pedido';


    //solo Dios sabe para que es esto, yo hago nomas
    public $timestamps = false;

    protected $fillable = [
    	'num_pedido',
    	'fecha',
    	'cliente',
    	'total',
    	'estado'
    ];

    protected $guarded = [
    ];
}
