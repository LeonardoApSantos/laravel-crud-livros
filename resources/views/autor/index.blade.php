@extends('master')
@section('titulo','Autores')
@section('conteudo')

<a href="/home" class="btn float-right">Home</a>
<div class="container">

  <h1 class="text-center display-4"><a href="/autor/create">Novo Autor</a></h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Biografia</th>
      <th scope="col">Modelo</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
  </tbody>
   
  
    @foreach($autores as $a)
    <tr> 
      <td>{{$a->nome}}</td>
      <td>{{$a->biografia}}</td>
      <td>{{$a->cd_autor}}</td>
      <td>{{$a->dt_nascimento}}</td>
      <td><a href="autor/{{$a->id}}/edit">Editar</a></td>  	

  </tr>
  @endforeach
  </table>

  </div>

@endsection