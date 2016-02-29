<?php

namespace App\Http\Controllers;

use App\Arquivo;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arquivo = Arquivo::create($request->except('arquivo'));

        if ($request->file('arquivo')->isValid()) {
            if (!file_exists('acervo/'))
                mkdir('acervo', 0777, true);

            $filename = $request->file('arquivo')->getClientOriginalName();
            $request->file('arquivo')->move('acervo', $filename);
            $arquivo->path = $filename;
            $arquivo->save();
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Arquivo::destroy($id);
        return redirect('/');
    }
}
