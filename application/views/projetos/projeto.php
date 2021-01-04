<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
            
        <?= anchor('inicio/index','Voltar', array("class" => "btn btn-primary"))?>
        
            <table class="table">
               
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>

                <tr>
                <?php foreach($projetos as $projeto) : ?>
                    <td><?=$projeto["codigo"] ?></td>
                    <td><?=$projeto["nome"] ?></td>
                    <td><?=$projeto["descricao"] ?></td>
                </tr>
           
            <?php endforeach ?>
            </table>

            <h1>Cadastro de Projeto</h1>
            <?php
                echo form_open("projetos/cadastroProjeto");

                echo form_label("Nome", "Nome");    
                echo form_input(array(
                "name" => "Nome",
                "id" => "Nome",
                "class" => "form-control",
                "maxlength" => "255"
                ));

                echo form_label("Descricao", "Descricao");    
                echo form_input(array(
                "name" => "Descricao",
                "id" => "Descricao",
                "class" => "form-control",
                "type" => "TEXT"
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Cadastrar",
                    "type" => "submit"
                ));

                echo form_close();
                ?>
        <div>
    </body>
</html>