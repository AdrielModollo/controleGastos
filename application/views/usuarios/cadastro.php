<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
            <h1>Cadastro</h1>
            <?php
                echo form_open("usuarios/cadastro");

                echo form_label("Nome", "Nome");    
                echo form_input(array(
                "name" => "Nome",
                "id" => "Nome",
                "class" => "form-control",
                "maxlength" => "255"
                ));

                echo form_label("Email", "Email");
                echo form_input(array(
                "name" => "Email",
                "id" => "Email",
                "class" => "form-control",
                "maxlength" => "255"
                ));

                echo form_label("Senha", "Senha");
                echo form_password(array(
                "name" => "Senha",
                "id" => "Senha",
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
            </table>
        <div>
    </body>
</html>