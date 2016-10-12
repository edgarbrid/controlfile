<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    //Muestra formulario de login de funcionario
    public function getFuncionario()
    {
        return view('login.funcionario');
    }

    //Autorización o login (Funcionarios)
    public function postLoginFuncionario(Request $request)
    {
        $usuario = $request->input('usuario');
        $password = $request->input('password');
        $datos = ['usuario'=>$usuario,'password'=>$password,'admin'=>false];
        if (Auth::attempt($datos)) {
            return redirect()->action('UserController@getIndex');
        }else{
            return redirect()->back();
        }
    }

    //Muestra formulario de login superadministrador
    public function getSuper()
    {
        return view('login.super');
    }

    //Autorización o login (Super)
    public function postLoginSuper(Request $request)
    {
        $usuario = $request->input('usuario');
        $password = $request->input('password');
        $datos = ['usuario'=>$usuario,'password'=>$password,'admin'=>true];
        if (Auth::attempt($datos)) {
            return redirect()->action('AdminController@getHistorial');
        }else{
            return redirect()->back();
        }
    }

    public function getSalir()
    {
        $tipoUser = Auth::user()->admin;
        if ($tipoUser == true) {
            Auth::logout();
            return redirect()->action('LoginController@getSuper');
        }else{
            Auth::logout();
            return redirect()->action('LoginController@getFuncionario');
        }
    }

}
