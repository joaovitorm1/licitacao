@extends('template.template')
@section('titulo-aplicativo', 'prefeitura de porto seguro')

@section('titulo-pagina', 'prefeitura de porto seguro')
@section('css-pagina')
  <link rel="stylesheet" href={{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>
@endsection
@section('conteudo-principal')
<div class="container">
    <!-- Left navbar links -->
    <div class="row">
        <div class="col-8">
            
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" >
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" >
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div>text</div>
        </div> 
    </div>
  </div>
@endsection
 