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
            <th>Servidor</th>
            <th>Status</th>
        </tr>

        <tr>
        <?php foreach($clientes as $cliente) : ?>
            <td><?=$cliente["Codigo"] ?></td>
            <td><?=$cliente["Nome"] ?></td>
            <td><?=$cliente["Servidor"] ?></td>
            <td><?=$cliente["status"] ?></td>
            <td>
                <form method="POST" action="delete/<?=  $cliente["Codigo"]; ?>">
                    <input type="hidden" name="delete" value="<?= $cliente["Codigo"]; ?>">
                    <input class="btn btn-danger" type="submit" value="Excluir clientes">
                </form>
            </td>
            <td> <form method="POST" action="alterar/<?=  $cliente["Codigo"]; ?>">
                    <input type="hidden" name="clientes_codigo" value="<?= $cliente["Codigo"]; ?>">
                    <input class="btn btn-primary" type="submit" value="Alterar clientes">
                </form>
        </tr>
    
    <?php endforeach ?>
            </table>
        
            <h1>Cadastro de Clientes</h1>
            <?php
                echo form_open("clientes/cadastroCliente");
                echo form_label("Nome", "Nome");    
                echo form_input(array(
                "name" => "Nome",
                "id" => "Nome",
                "class" => "form-control",
                "maxlength" => "255"
                ));

                echo form_label("Servidor", "Servidor");    
                echo form_input(array(
                "name" => "Servidor",
                "id" => "Servidor",
                "class" => "form-control",
                "maxlength" => "255"
                ));

                echo form_label("status", "status");
                $options = [
                    'ativo' => 'Ativo',
                    'inativo' => 'Inativo'
                ];
                echo form_dropdown('status', $options, 'large');
        
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