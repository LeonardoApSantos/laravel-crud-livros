@extends('master')
@section('titulo','Livros')
@section('conteudo')
<a href="/home" class="btn float-right">Home</a>
<div class="container">

  <h1 class="text-center display-4"><a href="/livro/create">Novo Livro</a></h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Subtitulo</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Autor</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
  </tbody>
   
  
    @foreach($livros as $l)
    <tr> 
      <td>{{$l->titulo}}</td>
      <td>{{$l->subtitulo}}</td>
      <td>{{$l->sinopse}}</td>
      <td>{{$l->autor}}</td>
      <td>{{$l->vl_venda}}</td>
      <td>{{$l->dt_lancamento}}</td>
      <td><a href="livro/{{$l->id}}/edit">Editar</a></td>  	

  </tr>
  @endforeach
  </table>

  </div>
@endsection