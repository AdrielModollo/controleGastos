<html>
    <head>
        <link rel="stylesheet" href="<?=base_url('css/bootstrap.css')?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    </head>
    <body>
    <?= anchor('inicio/index','Voltar', array("class" => "btn btn-primary"))?>
        <div class="container">
        <h1>Cadastro de tarefas</h1>
        <?php
        echo validation_errors();
        echo form_open("tarefas/novo");

        echo form_label("Nome", "Nome");
        echo form_input(array(
            "name" => "Nome",
            "class" => "form-control",
            "id" => "Nome",
            "maxlength" => "255",
        ));


        echo form_label("Comando", "Comando");
        echo form_input(array(
            "name" => "Comando",
            "class" => "form-control",
            "id" => "Comando",
            "maxlength" => "255",
            "type" => "TEXT",
        ));

        echo("<br />");

        echo form_label("Periodicidade", "Periodicidade");
        $periodicidade = [
            'diaria' => 'diaria',
            'semanal' => 'semanal',
            'mensal' => 'mensal',
            'semestral' => 'semestral',
            'anual' => 'anual'
        ];
        echo form_dropdown('Periodicidade', $periodicidade, 'diaria');

        echo("<br /><br />\n");

        echo form_label("Horario", "Horario");
        echo form_input(array(
            "name" => "Horario",
            "class" => "form-control",
            "id" => "Horario",
            "type" => "TIME",
        ));

        echo form_label("QuantidadeMinutosEsperadoExecucao", "QuantidadeMinutosEsperadoExecucao");
        echo form_input(array(
            "name" => "QuantidadeMinutosEsperadoExecucao",
            "class" => "form-control",
            "id" => "QuantidadeMinutosEsperadoExecucao",
        ));

        echo("<br />\n");

        echo form_label("Processo", "StatusTarefa");
        $statusTarefa = [
            'parado' => 'Parado',
            'executando' => 'Executando',
            'travado' => 'Travado',
        ];
        echo form_dropdown('StatusTarefa', $statusTarefa, 'executando');

        echo("<br /><br />\n");

        echo form_label("Status da Tarefa ", "StatusSistema ");
        $statusSistema = [
            0 => 'Inativo',
            1 => 'Ativo',
        ];
        echo form_dropdown('StatusSistema', $statusSistema, 'ativo');

        echo("<br /><br />\n");

        echo form_label("Data de Cadastro", "DataCadastro");
        $DataCadastro = date('d/m/Y H:i');
        echo $DataCadastro;

        echo("<br /><br />\n");

        echo form_label("Projeto", "idProjeto");
        echo form_dropdown('idProjeto', $projetos);

        echo("<br /><br />\n");

        echo form_label("Cliente", "idCliente");
        echo form_dropdown('idCliente', $clientes);

        echo("<br /><br />\n");

        echo form_label("Linguagem", "idLinguagem");
        echo form_dropdown('idLinguagem', $linguagens);

        echo("<br /><br />\n");
        
        echo form_button(array(
            "class" => "btn btn-primary",
            "content" => "Cadastrar",
            "type" => "submit"
        ));

        echo form_close();
        ?>
    
        </div>
    </body>
</html>