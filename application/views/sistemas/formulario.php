<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
        <?= anchor('inicio/index','Voltar', array("class" => "btn btn-primary"))?>
        <table class="table">
            <h1>Vincular Projeto a Sistema</h1>
            <?php
            echo form_open("sistemas/novo");
            
            echo form_label("Projeto", "idProjeto");
            echo form_dropdown('idProjeto', $projetos);

            echo("<br /><br />\n");

            echo form_label("Cliente", "cliente_Codigo");
            echo form_dropdown('cliente_Codigo', $clientes);

            echo("<br /><br />\n");

            echo form_label("Programador", "idProgramador");
            echo form_dropdown('idProgramador', $programador);

            echo("<br /><br />\n");
            
            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Cadastrar",
                "type" => "submit"
            ));

            echo form_close();
            ?>
            </table>
        <div>
    </body>
</html>