<style>
    body {
        background:#73ac33;
    }
</style>

<div class="row">
    <div class="col-sm-10 mx-auto admin-board mt-4 mb-4">
<?php
if(!isset($_SESSION['UserLogin'])) {
    echo '<script>window.location = "./admin";</script>';
    exit();
}
?>
<?php if($pagename == 'dashboard') {
    require('addRegistro.php');
} else {
    require('relatorio.php');
}
?>
</div>
<div class="text-center">
	<h6>duvidas entre em contato com João Vitor</h6>
	<h6><a class="btn btn-primary" href="tel:73991573963" >telefone</a></h6>
</div>
</div>