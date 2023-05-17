<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //Crear los metodos para el controlador en este caso la funcion llama a la carpeta aut y luego al archivo principal
    public function principal() {
        return view('auth.principal');
    }
}
