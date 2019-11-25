@extends('master')
@section('titulo','Novo Livro')
@section('conteudo')

  @foreach($errors->all() as $e)  
  <div class="alert alert-primary" role="alert">
    <p>{{$e}}</p>
  </div>
  @endforeach

  <form method="post" class="container" action="/livro">
    <h3 class="text-center display-4">Novo Automóvel</h3>
  @csrf
  <dl class="row">
  <div class="col-12">
  	<dt>Titulo</dt>
  	<dd><input type="text" class="form-control" name="titulo"></dd>
    </div>
  <div class="col-12">
  	<dt>Subtitulo</dt>
  	<dd><input type="text" class="form-control" name="subtitulo"></dd>
    </div>
    <div class="col-12">
  	<dt>Sinopse</dt>
  	<dd><input type="text" class="form-control"  name="sinopse"></dd>
    </div>
    <div class="col-12">
    <dt>Autor</dt>
  	<dd><input type="text" class="form-control"  name="autor"></dd>
    </div>
    <div class="col-6">
    <dt>Valor para venda</dt>
  	<dd><input type="number" class="form-control"  name="vl_venda"></dd>
    </div>
    <div class="col-6">
    <dt>Data de Lançamento</dt>
  	<dd><input type="date" class="form-control"  name="dt_lancamento"></dd>
    </div>
  </dl>
  <a href="/livro" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Enviar">

  </form>
@endsection