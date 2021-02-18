@extends('layouts.template-frente')

@section('titulo-aplicativo', 'App-Inscrição')

@section('titulo-pagina', 'Aviso Cadastro Duplicado')

@section('metadados')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('css-pagina')
@endsection

@section('conteudo-principal')
    @component('components.breadcrumb-frente')
        @slot('titulo')
            Formulário de Inscrição - {{ session()->get('edital')->nome }} - {{ session()->get('edital')->numero }}
        @endslot

        @slot('subTitulo')
            <small> acesso em: {{ date("d/m/Y h:i:s") }}
        @endslot
    @endcomponent

    <section class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="icon fas fa-ban"></i> Atenção!</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="callout callout-danger">
                                        <h5>Estes editais NÃO permite que o candidato mantenha vários cadastros.
                                        <b>Ao optar por um novo cadastro a inscrição anterior será excluída</b>
                                        <br>
                                        Deseja confirma a exclusão?</h5>
                                    </div>

                                    <div class="row float-right">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-2">
                                                @csrf
                                                <a class="btn btn-secondary" href="{{ route('inicio') }}">NÃO</a>
                                            </div>
                                            <div class="btn-group">
                                                @csrf
                                                <a class="btn btn-danger" href="{{ route('inscricao.formExcluirCandidato') }}">SIM</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js-pagina')

    <!-- Plugin Mascaras -->
    {{-- <script src={{asset("/plugins/jquery-mask-plugin/jquery.mask.js")}}></script> --}}
    <script src={{asset("/plugins/moment/moment.min.js")}}></script>
    <script src={{asset("/plugins/inputmask/jquery.inputmask.min.js")}}></script>

    <script src={{asset("/plugins/daterangepicker/daterangepicker.js")}}></script>
    <script src={{asset("/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>
    <script src={{asset("/plugins/dropzone/min/dropzone.min.js")}}></script>

    <script src={{asset("/js/pages/inscricao.js")}}></script>

    <script>
        @component('components.alert') @endcomponent
    </script>
@endsection
