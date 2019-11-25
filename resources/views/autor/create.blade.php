@extends('master')
@section('titulo','Nova Autor')
@section('conteudo')
  
  @foreach($errors->all() as $e)  
  <div class="alert alert-primary" role="alert">
    <p>{{$e}}</p>
  </div>
  @endforeach

  <form method="post" class="container" action="/autor">
    <h3 class="text-center display-4">Novo Autor</h3>
  @csrf
  <dl class="row">

  <div class="col-12">
  	<dt>Nome</dt>
  	<dd><input type="text" class="form-control" name="nome"></dd>
    </div>
    <div class="col-12">
  	<dt>biografia</dt>
  	<dd><input type="text" class="form-control" name="biografia"></dd>
    </div>
    <div class="col-6">
      <dt>Data de Nascimento</dt>
      <dd><input type="date"  class="form-control"  name="dt_nascimento"></dd>  
    </div>   

    <div class="col-6">
      <dt>Livro</dt>
      
      <select name="" id="" class="form-control">
        @foreach($livro as $l)
         <option name="{{$l->nome}}" id="" value="{{$l->id}}">{{$l->nome}}</option>
        @endforeach
      </select>
    </div> 

  </dl>
  <a href="/autor" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Enviar">

  </form>
@endsection


