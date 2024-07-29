<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function LoginIndex(){
        return view('IniciarSesion/Login');
    }
    public function LoginStore(Request $request){

        $login = new Login;
        $login -> CoD = $request-> input('CoD');
        $login -> password = $request ->input('password');
        $login->save();
    }

}
