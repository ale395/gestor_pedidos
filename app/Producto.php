<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Categoria;

class Producto extends Model
{
	public function get_categoria($id)
	{
		$categoria = Categoria::find($id);
		return $categoria->nomb_categoria;
	}	

	//
}
