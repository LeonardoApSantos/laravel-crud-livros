@extends('master')
@section('titulo','Novo Livro')
@section('conteudo')
 
@foreach($errors->all() as $e)  
  <div class="alert alert-primary" role="alert">
    <p>{{$e}}</p>
  </div>
  @endforeach

  <form method="post" action="/livro/{{$livro->id}}">
    <h3 class="text-center display-4">Editar Livro</h3>
  @csrf
  @method("put")
    <div class="container">
  
  <dl class="row">
  <div class="col-12">
  	<dt>Titulo</dt>
  	<dd><input type="text" class="form-control" name="nome" value="{{$livro->titulo}}"></dd>
    </div>
  <div class="col-12">
  	<dt>Subtitulo</dt>
  	<dd><input type="text" class="form-control" name="marca"  value="{{$livro->subtitulo}}"></dd>
    </div>
    <div class="col-12">
  	<dt>Sinopse</dt>
  	<dd><input type="text" class="form-control"  name="modelo"  value="{{$livro->sinopse}}"></dd>
    </div>
    <div class="col-12">
    <dt>Autor</dt>
  	<dd><input type="text" class="form-control"  name="placa"  value="{{$livro->autor}}"></dd>
    </div>
    <div class="col-6">
    <dt>Valor para venda</dt>
  	<dd><input type="number" class="form-control"  name="vl_venda"  value="{{$livro->vl_venda}}"></dd>
    </div>
    <div class="col-6">
    <dt>Data de Lançamento</dt>
  	<dd><input type="date" class="form-control"  name="dt_fabricacao"  value="{{$livro->dt_lancamento}}"></dd>
    </div>
    
  </dl>
  <a href="/livro" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Atualizar">
  </form>
  </div>
@endsection