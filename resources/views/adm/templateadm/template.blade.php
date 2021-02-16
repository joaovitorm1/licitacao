<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('metadados')

    <title> @yield('titulo-aplicativo') | @yield('titulo-pagina')</title>
    <!-- Tell the browser to be responsive to screen width -->
        <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{asset("plugins/fontawesome-free/css/all.min.css")}}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("dist/css/adminlte.min.css")}}>
</head>
  @component('adm.componentes.head') @endcomponent
  @yield('conteudo-principal')
  @component('adm.componentes.footer') @endcomponent

  <!-- jQuery -->
<script src={{asset("plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap -->
<script src={{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- overlayScrollbars -->
<script src={{asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("dist/js/adminlte.js")}}></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src={{asset("plugins/jquery-mousewheel/jquery.mousewheel.js")}}></script>
<script src={{asset("plugins/raphael/raphael.min.js")}}></script>
<script src={{asset("plugins/jquery-mapael/jquery.mapael.min.js")}}></script>
<script src={{asset("plugins/jquery-mapael/maps/usa_states.min.js")}}></script>
  @yield('js-pagina')

</body>
</html>