<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Livro;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtem todos os Autores cadastrados e os passa para view
        $autores = Autor::all();
        return view('autor.index')->with('autores',$autores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livro = Livro::all();

        return view ('autor.create', ['livro' => $livro]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Autor::create($request->all());
        return redirect('autor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $Autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autor  $Autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {        
        $livro = Livro::all();

        return view('autor.edit', ['livro' => $livro])->with('autor',$autor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autor  $Autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        $autor->update($request->all());
        return redirect('autor'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autor  $Autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
