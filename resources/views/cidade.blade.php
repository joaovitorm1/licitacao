@extends('template.template')
@section('titulo-aplicativo', 'prefeitura de porto seguro')

@section('titulo-pagina', 'prefeitura de porto seguro')
@section('css-pagina')
  <link rel="stylesheet" href={{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>
@endsection
@section('conteudo-principal')
<div class="container">
    <!-- Left navbar links -->
    <ul class="navbar-nav m-auto">
      <li class="nav-item dropdown">
        <a href="#" class="button"><i class="far fa-home-lg-alt"></i></a>
      </li>
    </ul>
  </div>
@endsection
 