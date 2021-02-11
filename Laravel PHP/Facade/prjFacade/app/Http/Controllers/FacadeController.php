<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Impresora;


class FacadeController extends Controller
{
    //
    

    public function Imprimir(Request $request){
        $fields = $request->input('result');
        if($fields == 'Color'){
            $imp = Impresora::impresionNormalColor($request->texto);
        } else{
            $imp = Impresora::impresionNormalBN($request->texto);
        }
        return view('TextoEnviado', compact('imp'));
    }
}
