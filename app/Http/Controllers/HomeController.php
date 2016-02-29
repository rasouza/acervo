<?php

namespace App\Http\Controllers;

use App\Arquivo;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function materias()
    {
        $tipo = 'materia';
        $arquivos = Arquivo::all()->groupBy('materia')->keys();
        return view('arquivos', compact('arquivos', 'tipo'));
    }

    public function turmas()
    {
        $tipo = 'turma';
        $arquivos = Arquivo::all()->groupBy('turma')->keys();
        return view('arquivos', compact('arquivos', 'tipo'));
    }

    public function professores()
    {
        $tipo = 'professor';
        $arquivos = Arquivo::all()->groupBy('professor')->keys();
        return view('arquivos', compact('arquivos', 'tipo'));
    }

    public function categorias()
    {
        $tipo = 'categoria';
        $arquivos = Arquivo::all()->groupBy('categoria')->keys();
        return view('arquivos', compact('arquivos', 'tipo'));
    }

    public function procurar(Request $req) {
        $texto = $req->input('procurar');
        return view('procurar', compact('texto'));
    }

    public function download($arquivo) {
        return response()->download("acervo/$arquivo");
    }
}
