@extends('template.template')
@section('titulo-aplicativo', 'prefeitura de porto seguro')

@section('titulo-pagina', 'Secretarias')
@section('css-pagina')
  <link rel="stylesheet" href={{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>
@endsection
@section('conteudo-principal')
<table id="example" class="display" style="width:100%">
  <thead>
      <tr>
          <th>Edital</th>
          <th>Processo</th>
          <th>Publicação</th>
          <th>Abertura</th>
          <th>Modalidade</th>
          <th>Objeto</th>
          <th>situacao</th>
      </tr>
  </thead>
  <tbody>

    <tr data-url="./visualizar/561">
    <th scope="row">PE060/2020</th>
    <td>14532/2020</td>
    <td>04/12/2020</td>
    <td>17/12/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 060/2020</td>
    <td><a href="./visualizar/561" style="text-transform: uppercase;"> Registro de preços objetivand... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/560">
    <th scope="row">PE059/2020</th>
    <td>16201/2020</td>
    <td>04/12/2020</td>
    <td>17/12/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 059/2020</td>
    <td><a href="./visualizar/560" style="text-transform: uppercase;"> Registro de preços objetivand... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/558">
    <th scope="row">PE058/2020</th>
    <td>15374/2020</td>
    <td>04/12/2020</td>
    <td>16/12/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 058/2020</td>
    <td><a href="./visualizar/558" style="text-transform: uppercase;"> Registro de preços objetivand... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/557">
    <th scope="row">PE057/2020</th>
    <td>1520/2020</td>
    <td>04/12/2020</td>
    <td>16/12/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 057/2020</td>
    <td><a href="./visualizar/557" style="text-transform: uppercase;"> Registro de preços objetivand... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/556">
    <th scope="row">PE056/2020</th>
    <td>15782/2020</td>
    <td>24/11/2020</td>
    <td>04/12/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 056/2020</td>
    <td><a href="./visualizar/556" style="text-transform: uppercase;"> Registro de preços objetivand... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/555">
    <th scope="row">PE055/2020</th>
    <td>5336/2020</td>
    <td>24/11/2020</td>
    <td>04/12/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 055/2020</td>
    <td><a href="./visualizar/555" style="text-transform: uppercase;"> Contratação de empresa para ... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/554">
    <th scope="row">PE054/2020</th>
    <td>15732/2020</td>
    <td>19/11/2020</td>
    <td>01/12/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 054/2020</td>
    <td><a href="./visualizar/554" style="text-transform: uppercase;"> CONTRATAÇÃO DE EMPRESA PARA ... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/553">
    <th scope="row">PE053/2020</th>
    <td>12487/2020</td>
    <td>17/11/2020</td>
    <td>30/11/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 053/2020</td>
    <td><a href="./visualizar/553" style="text-transform: uppercase;"> Registro de preços objetivand... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/552">
    <th scope="row">PE052/2020</th>
    <td>15714/2020</td>
    <td>17/11/2020</td>
    <td>27/11/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 052/2020</td>
    <td><a href="./visualizar/552" style="text-transform: uppercase;"> Registro de preços objetivand... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/551">
    <th scope="row">PE051/2020</th>
    <td>16853/2020</td>
    <td>17/11/2020</td>
    <td>24/11/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 051/2020</td>
    <td><a href="./visualizar/551" style="text-transform: uppercase;"> Registro de preços visando a ... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/549">
    <th scope="row">PE050/2020</th>
    <td>15108/2020</td>
    <td>11/11/2020</td>
    <td>25/11/2020</td>
    <td class="t2">PREGÃO ELETRÔNICO Nº 050/2020</td>
    <td><a href="./visualizar/549" style="text-transform: uppercase;">  Registro de preços objetivan... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
    <tr data-url="./visualizar/548">
    <th >PE049/2020</th>
    <td>13472/2020</td>
    <td>10/11/2020</td>
    <td>18/11/2020</td>
    <td >PREGÃO ELETRÔNICO Nº 049/2020</td>
    <td><a href="./visualizar/548" > Contratação de HOTEL ou POUS... </a></td>
    <th scope="row">-</th>
  <!--  <th scope="row">-</th> -->
</tr>
</tbody>
  <tfoot>
      <tr>
        <th>Edital</th>
        <th>Processo</th>
        <th>Publicação</th>
        <th>Abertura</th>
        <th>Modalidade</th>
        <th>Objeto</th>
        <th>situacao</th>
      </tr>
  </tfoot>
</table>
 
      @endsection
    <!-- /.content-wrapper -->
  
    <!-- Control Sidebar -->
  
      <!-- Control sidebar content goes here -->
     
    <!-- /.control-sidebar -->
  
 
  <!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->

  
  
