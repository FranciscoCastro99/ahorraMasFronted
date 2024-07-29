<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContadorController extends Controller
{
    public function UserIndex(){
        return view('Modulos.perfil.inicio');
    }

    public function ContadorIndex(){
        return view('Modulos.perfil.Contador');
    }
    public function AgregarIndex(){
        return view('Modulos.perfil.Contador');
    }
}
