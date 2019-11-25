@extends('master')
@section('titulo','Nova Autor')
@section('conteudo')

  <form method="post" action="/autor/{{$autor->id}}">
    <h3 class="text-center display-4">Editar Autor</h3>
  @csrf
  @method("put")
    <div class="container">
  
  <dl class="row">
  <div class="col-12">
  <dt>Nome</dt>
  	<dd><input type="text"  class="form-control" name="nome" value="{{$autor->nome}}">
    </dd>
  <div class="col-12">
  <dt>biografia</dt>
  	<dd><input type="text"  class="form-control" name="descricao" value="{{$autor->biografia}}"></dd>
    </div>
  </dl>
  <div class="col-6">
      <dt>Data de Nascimento</dt>
      <dd><input type="date"  class="form-control" value="{{$autor->dt_nascimento}}" name="dt_nascimento"></dd>  
    </div>   

    <div class="col-6">
      <dt>Livro</dt>
      
      <select name="" id="" class="form-control">

        @foreach($livro as $l)
         <option name="{{$l->nome}}" id="" value="{{$l->id}}"  <?php echo ($autor->livroId) ? 'selected' : '' ?>>{{$l->nome}}</option>
        @endforeach
      </select>
    </div> 

  <a href="/livro" class="btn">Voltar</a>
  <input type="submit" class="btn btn-primary" value="Atualizar">
  </form>


  
@endsection

