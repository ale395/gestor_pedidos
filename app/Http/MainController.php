<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request; 

use App\Http\Request;

class MainController extends Controller {
	public function home(){
		return view('main.home'), []; //en el corchete se envia la info necesaria para la vista

	}

}