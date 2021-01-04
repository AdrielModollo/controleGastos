<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
           <table class="table">
           <?= anchor('inicio/index','Voltar', array("class" => "btn btn-primary"))?>
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                </tr>

                <tr>
                <?php foreach($programadores as $programador) : ?>
                    <td><?=$programador["Codigo"] ?></td>
                    <td><?=$programador["Nome"] ?></td>
                </tr>
        
            <?php endforeach ?>
            </table>
            
            <h1>Cadastro de Programador</h1>
            <?php
                echo form_open("programadores/cadastroProgramador");

                echo form_label("Nome", "Nome");    
                echo form_input(array(
                "name" => "Nome",
                "id" => "Nome",
                "class" => "form-control",
                "maxlength" => "255"
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