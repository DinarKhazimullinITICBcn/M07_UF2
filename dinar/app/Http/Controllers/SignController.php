<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function signin($valor1, $valor2, $valor3, $valor4) {
        $textFinal = "";
        $textFinal .= ($valor1 == "") ? ' Iniciar ': $valor1 . " ";
        $textFinal .= ($valor2 == "") ? ' sessio ': $valor2 . " ";
        $textFinal .= ($valor3 == "") ? ' de ': $valor3 . " ";
        $textFinal .= ($valor4 == "") ? ' l\'usuari': $valor4;
        return view('signin') ->with('textFinal',$textFinal);
    }
    public function signup($valor1, $valor2, $valor3) {
        $textFinal = "";
        $textFinal .= ($valor1 == "") ? ' Creacio ': $valor1 . " ";
        $textFinal .= ($valor2 == "") ? ' d\'usuari ': $valor2 . " ";
        $textFinal .= ($valor3 == "") ? ' nou ': $valor3 . " ";
        return view('signup') ->with('textFinal', $textFinal);
    }
}
