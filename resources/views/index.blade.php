@extends('template.template')
@section('titulo-aplicativo', 'prefeitura de porto seguro')

@section('titulo-pagina', 'Secretarias')
@section('css-pagina')
  <link rel="stylesheet" href={{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>
@endsection
@section('conteudo-principal')
<br><br>
<div class="container">
  <div class="container">
<table id="datatable" class="display" style="width:100%">
  <thead>
      <tr>
          <th hidden>id</th>
          <th>Objeto</th>
          <th width="40px;">Edital</th>
          <th>Processo</th>
          <th>Publicação</th>
          <th>Abertura</th>
          <th>Modalidade</th>
          
      </tr>
  </thead>
  <tbody>
@foreach ($licitacao as $item)
  <tr>
    <th hidden>{{$item->id}}</th>
    <td><a href="./visualizar/{{$item->id}}" >{{substr($item->objeto, 0, 30)}}... </a></td>
    <th width="40px;">{{$item->num_edital}}</th>
    <td>{{$item->num_processo}}</td>
    <td>{{ date('d/m/Y',$item->data_publicacao)}}</td>
    <td>{{ date('d/m/Y',$item->data_abertura)}}</td>
    <td >{{$item->modalidade}}</td>
    
@endforeach
    
  <!--  <th scope="row">-</th> -->
  </tr>

</tbody>
  <tfoot>
      <tr>
        <th hidden>id</th>
        <th>Objeto</th>
        <th width="40px;">Edital</th>
        <th>Processo</th>
        <th>Publicação</th>
        <th>Abertura</th>
        <th>Modalidade</th>
      </tr>
  </tfoot>
</table>
</div>
</div>
      @endsection
    <!-- /.content-wrapper -->
  
    <!-- Control Sidebar -->
  
      <!-- Control sidebar content goes here -->
     
    <!-- /.control-sidebar -->
  
 
  <!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->

  
  
