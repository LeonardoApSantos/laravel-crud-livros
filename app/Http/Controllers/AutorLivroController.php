<?php

namespace App\Http\Controllers;
use App\Autor;
use App\Livro;
use App\Autor_livro;
use Illuminate\Http\Request;

class AutorLivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autor_livros = JogadorJogos::all();
        return view('autorLivros.index')->with('autorLivros', $autor_livros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = Autor::all();
        $livros = Livro::all();
        return view ('autorLivros.create', ['autores' => $autores, 'livros' => $livros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor = Autor::find($request->all()['autor_id']);
        $livro = Livro::find($request->all()['livro_id']);
        $livro->autores()->attach($autor);
        return redirect('autor-livro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autor_livro  $Autor_livro
     * @return \Illuminate\Http\Response
     */
    public function show(Autor_livro $autor_livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autor_livro  $Autor_livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor_livro $autor_livro)
    {
        $autores = Autor::all();
        $livros = Livro::all();
        return view('autor-livro.edit', ['autores' => $autores, 'livros' => $livros]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autor_livro  $autor_livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor_livro $autor_livro)
    {
        $autor_livro->update($request->all());
        return redirect('autor-livro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autor_livro  $autor_livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor_livro $autor_livro)
    {
        //
    }
}
