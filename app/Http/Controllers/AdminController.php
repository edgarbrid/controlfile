<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Area;
use App\Http\Requests;
use App\Models\Tipodoc;
use App\Models\Documento;
use App\Models\Profesion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //Muestra página inicial del panel Admin
    public function getIndex()
    {
        $users = User::all();
        $areas = Area::all();
        $profesiones = Profesion::all();
        $tipos = Tipodoc::all();
        $datos = ['areas'=>$areas,'profesiones'=>$profesiones,'users'=>$users,'tipos'=>$tipos];
        return view('admin.index',$datos);
    }

    public function getHistorial()
    {
        $documentos = Documento::all();
        $datos = ['documentos'=>$documentos];
        return view('admin.historial',$datos);
    }

    //Registra un nuevo funcionario
    public function postCrearFuncionario(Request $request)
    {
        //dd($request->all());
        $rules = [
            'nombre' => 'required|regex:/^[a-z-A-Z ÁáÉéÍíÓóÚúÑñ]+$/i|min:5',
            'documento' => 'required|regex:/^[0-9]+$/i|min:5|unique:users',
            'email' => 'required|email|unique:users',
            'telefono' => 'required|regex:/^[0-9]+$/i|min:5',
            'cargo' => 'required|regex:/^[a-z-A-Z ÁáÉéÍíÓóÚúÑñ]+$/i|',
            'profesion_id' => 'required',
            'area_id' => 'required',
            'usuario' => 'required|min:5'
        ];

        $v = \Validator::make($request->all(),$rules);
        if ($v->fails()) {
            return redirect()->back();
        }

        $user = new User;
        $user->nombre = $request->input('nombre');
        $user->documento = $request->input('documento');
        $user->email = $request->input('email');
        $user->telefono = $request->input('telefono');
        $user->cargo = $request->input('cargo');
        $user->profesion_id = $request->input('profesion_id');
        $user->area_id = $request->input('area_id');
        $user->usuario = $request->input('usuario');
        $user->password = bcrypt(123456);
        $user->save();
        return redirect()->action('AdminController@getIndex');
    }

    //Registra áreas    
    public function postCrearArea(Request $request)
    {
        $rules = [
            'area' => 'required|regex:/^[a-z-A-Z ÁáÉéÍíÓóÚúÑñ]+$/i|min:3'
        ];

        $v = \Validator::make($request->all(),$rules);

        if ($v->fails()) {
            return redirect()->back();
        }

        $area = new Area;
        $area->area = $request->input('area');
        $area->save();
        return redirect()->action('AdminController@getIndex');
    }

    //Registra profesiones
    public function postCrearProfesion(Request $request)
    {
        $rules = [
            'profesion' => 'required|regex:/^[a-z-A-Z ÁáÉéÍíÓóÚúÑñ]+$/i|min:3'
        ];

        $v = \Validator::make($request->all(),$rules);

        if ($v->fails()) {
            return redirect()->back();
        }

        $profesion = new Profesion;
        $profesion->profesion = $request->input('profesion');
        $profesion->save();
        return redirect()->action('AdminController@getIndex');
    }

    //Registra tipo de documentos
    public function postCrearTipoDoc(Request $request)
    {
        $rule = [
            'tipo' => 'required|regex:/^[a-z-A-Z ÁáÉéÍíÓóÚúÑñ]+$/i|min:3'
        ];

        $v = \Validator::make($request->all(),$rule);

        if ($v->fails()) {
            return redirect()->back();
        }

        $tipo = new Tipodoc;
        $tipo->tipo = $request->input('tipo');
        $tipo->save();
        return redirect()->action('AdminController@getIndex');
    }
}
