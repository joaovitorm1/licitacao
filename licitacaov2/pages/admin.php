<style>
    body {
        background:#73ac33;
    }
</style>
<div class="row">
    <div class="col-sm-6 mx-auto admin-board mt-4">
        <h3 style="margin-top:30px; font-weight: bold">Admin</h3>
        <h6>Entre com seus dados para administrar</h6>
        <form action="./request/admin/login" id="loginAdmin" class="mt-4" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu usuário">
                <small id="emailHelp" class="form-text text-muted">Digite seu usuário admin </small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Senha</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite sua senha admin">
                <small id="emailHelp" class="form-text text-muted">Digite sua senha admin</small>
            </div>

            <button type="submit" class="btn btn-primary button-login">Logar</button>
	<div class="text-center">
		<h6>duvidas entre em contato com João Vitor</h6>
		<h6><a class="btn btn-primary" href="tel:73991573963" >telefone</a></h6>
	</div>
        </form>

        <div class="alert" style="clear:both; margin-top:30px;"></div>
    </div>
	
</div>


<script>
$('.button-login').click(function() {
        var data = $('#loginAdmin').serialize();

        $.post('./request/admin/login', data, function(response) {
           if(response.code == 1) {
               window.location = './dashboard';
           } else {
               $('.alert').addClass('alert-danger');
               $('.alert').html(response.msg);
           }
        }, 'json');

        return false;
});
</script>
