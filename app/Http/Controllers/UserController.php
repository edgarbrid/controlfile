<?php

namespace App\Http\Controllers;

use Auth;
use Uuid;
use App\Http\Requests;
use App\Models\Tipodoc;
use App\Models\Documento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // Muestra página inicial panel Funcionario
    public function getIndex()
    {
        $tipodocs = Tipodoc::all();
        $documentos = Documento::where('user_id',Auth::user()->id)->take(3)->orderBy('id','desc')->get();
        $datos = ['tipodocs'=>$tipodocs,'documentos'=>$documentos];
        return view('user.index',$datos);
    }

    // Registra transferencia de documentos
    public function postTransferenciaDoc(Request $request)
    {
        $rules = [
            'tipodoc_id' => 'required',
            'codfuncional' => 'required|min:3',
            'serie' => 'required|min:3',
            'folio' => 'required|min:3',
            'desde' => 'required',
            'hasta' => 'required'
            //'observaciones' => 'required'
        ];

        $v = \Validator::make($request->all(),$rules);

        if ($v->fails()) {
            $request->session()->flash('error','El registro de transferencia del documento no se guardó, intente nuevamente');
            return redirect()->back();
        }

        $hora_actual = date('h:i:s');
        $desde = $request->input('desde').' '.$hora_actual;


        $documento = new Documento;
        $documento->uuid = Uuid::generate(4)->string;
        $documento->tipodocs_id = $request->input('tipodoc_id');
        $documento->codfuncional = $request->input('codfuncional');
        $documento->seriedoc = $request->input('serie');
        $documento->nfolio = $request->input('folio');
        $documento->desde = $desde;
        $documento->hasta = $request->input('hasta').' '.'23:59:59';
        $documento->observacion = $request->input('observaciones');
        $documento->user_id = Auth::user()->id;
        $documento->save();
        //dd($documento->id);
        $request->session()->flash('comprobante',$documento->id);
        return redirect()->action('UserController@getIndex');
    }

    public function getSoporteTransferencia($doc)
    {
        $documento = Documento::find($doc);
        $datos = ['documento'=>$documento];
        $view = view('user.comprobante',$datos);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('letter')->setWarnings(false);
        return $pdf->stream('comprobante.pdf');
    }
}
