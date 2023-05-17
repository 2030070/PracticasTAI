<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Crear los metodos para el controlador
    public function index() {
        return view('auth.register');
    }
}
