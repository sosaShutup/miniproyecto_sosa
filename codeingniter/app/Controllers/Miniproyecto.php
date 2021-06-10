<?php

namespace App\Controllers;

class Miniproyecto extends BaseController
{
	public function index()
	{
		$model = new DatosModel();
		$datos = $model->listar();
		$data = [
                     "datos" => $datos
		]
		return view('listado');
	}
}
