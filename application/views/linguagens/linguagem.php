<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
        <table class="table">  
            
        <?= anchor('inicio/index','Voltar', array("class" => "btn btn-primary"))?>

            <table class="table">
               
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                </tr>

                <tr>
                <?php foreach($linguagens as $linguagem) : ?>
                    <td><?=$linguagem["Codigo"] ?></td>
                    <td><?=$linguagem["Nome"] ?></td>
                    <td> <form method="POST" action="alterar/<?=  $linguagem["Codigo"]; ?>">
                    <input type="hidden" name="linguagens_codigo" value="<?= $linguagem["Codigo"]; ?>">
                    <input class="btn btn-primary" type="submit" value="Alterar Linguagem">
                    </form>
                </tr>
            </tr>
           
            <?php endforeach ?>
            </table>
            
            <h1>Cadastro de Linguagens</h1>
            <?php
                echo form_open("linguagens/cadastroLinguagem");

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