<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
            <?php if($this->session->flashdata("success"))  : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>
            <?php if($this->session->flashdata("danger"))  : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>
            
        <?php if($this->session->userdata("usuario_logado")) : ?>
            <div class="navbar navbar-inverse navbar-fixed-top">
	            <div class="container">
		         <div class="navbar-header">
                    <div>
	                    <ul class="nav navbar-nav">
		                    <li><?= anchor('sistemas/sistema','Sistemas'/*, array("class" => "btn btn-primary")*/)?></li>
                            <li><?= anchor('clientes/cliente','Clientes'/*, array("class" => "btn btn-primary")*/)?></li>
                            <li><?= anchor('tarefas/listarTarefas','Tarefas'/*, array("class" => "btn btn-primary")*/)?></li>
                            <li><?= anchor('linguagens/linguagem','linguagens'/*, array("class" => "btn btn-primary")*/)?></li>
                            <li><?= anchor('projetos/projeto','Projetos'/*, array("class" => "btn btn-primary")*/)?></li>
                            <li><?= anchor('programadores/programador','Programadores'/*,array("class" => "btn btn-primary")*/)?></li>
                            <li><?= anchor('usuarios/cadastro','Usuarios'/*, array("class" => "btn btn-primary")*/)?></li>
                            <li><?= anchor('login/logout','Logout')?></li>
                </div>
            </div>
         </div>
        </div>
        <?php else : ?> 
            <div class="container">
            <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Insira seu usuário para iniciar a sessão</h1>
            <div class="account-wall">
            <center><img class="profile-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSK5KF1C37zAGGITIWFqMbE6oxxJT8XK4BxGQ&usqp=CAU" alt=""></center>
               
            <?php
            echo form_open("login/autenticar");

            echo form_label("Email", "email");
            echo form_input(array(
            "name" => "email",
            "id" => "email",
            "class" => "form-control",
            "maxlength" => "255"
            ));

            echo form_label("Senha", "senha");
            echo form_password(array(
            "name" => "senha",
            "id" => "senha",
            "class" => "form-control",
            "maxlength" => "255"
            ));

            echo form_button(array(
            "class" => "btn btn-lg btn-primary btn-block",
            "content" => "Entrar",
            "type" => "submit"
            ));

            echo form_close();
            ?>
            <?php endif ?>
 
        </div>
        </div>
        </div>
        </div>
        <div>
    </body>
</html>