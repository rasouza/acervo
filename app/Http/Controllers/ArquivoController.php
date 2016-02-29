<?php

namespace App\Http\Controllers;

use App\Arquivo;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArquivoController extends Controller
{
    public function materia($materia = null) {
        if($materia)
            $arquivos = Arquivo::where('materia', $materia)->get();
        else
            $arquivos = Arquivo::all();
        return response()->json($arquivos);
    }

    public function turma($turma = null) {
        if($turma)
            $arquivos = Arquivo::where('turma', $turma)->get();
        else
            $arquivos = Arquivo::all();
        return response()->json($arquivos);
    }

    public function professor($professor = null) {
        if($professor)
            $arquivos = Arquivo::where('professor', $professor)->get();
        else
            $arquivos = Arquivo::all();
        return response()->json($arquivos);
    }

    public function categoria($categoria = null) {
        if($categoria)
            $arquivos = Arquivo::where('categoria', $categoria)->get();
        else
            $arquivos = Arquivo::all();
        return response()->json($arquivos);
    }

    public function procurar($texto) {

        $arquivos = Arquivo::search(utf8_encode($texto))->get();
        return response()->json($arquivos);
    }

}
