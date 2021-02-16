$(function() {
    //lucas leia antes de meche
    //Quando clicar no botÃ£o para adicionar nova lista de escolaridade


    //Quando clicar no botao para adicionar nova experiencia
    $("#btn-adicionar-pdf").click(function(e) {
        //Evita que seja enviado ao clicar nesse botao
        e.preventDefault();

        //copia do codigo a cima com estruturas do cargo, favor verifica parametros de envio

        var linha = '<div class="col-md-6">' +
            '   <div class="form-group">' +
            '       <label for="nome">Nome do arquivo</label>' +
            '       <input type="text" id="nome" name="name_custom">' +
            '   </div>' +
            '   <div class="form-group">' +
            '       <label for="arquivo">envia arquivo</label>' +
            '       <input type="file" id="arquivo" name="file_name">' +
            '   </div>' +
            '</div>';

        //Adiciona a nova linha na div
        $("#div-pdf").append(linha);
    });

    //Quando clicar no botÃ£o para remover formaÃ§Ã£o ou experiÃªncia
    $("#div-pdf").on("click", ".btn-remover-item", function() {
        //Remove a <div class="card"> que contÃ©m a formaÃ§Ã£o ou experiÃªncia
        $(this).parent().parent().parent().parent().remove();
    })

});