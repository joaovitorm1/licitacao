@extends('adm.templateadm.template')
@section('titulo-aplicativo', 'Licitacao')
@section('titulo-pagina', 'Adicionar pdf')
@section('metadados')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('conteudo-principal')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Adicionar arquivo para a licitação</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body" id="div-pdf">
                <div class="form-group">
                    <label>Edital</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option selected="selected" >selecione</option>
                    </select>
                </div>
                <div class="form-group mb-0">
                    <button class="btn btn-danger" id="btn-adicionar-pdf" onclick="adicionapdf()">adicionar arquivo</button>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Envia</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  @endsection
@section('js-pagina')
<script src={{asset("js/pdf.js")}}></script>

<script>
  item = 0;

  @component('componentes.alert') @endcomponent
</script>

@endsection