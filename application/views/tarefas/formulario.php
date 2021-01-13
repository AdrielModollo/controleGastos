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
        echo form_open("gastos/novo");

        echo form_label("Nome", "nome");
        echo form_input(array(
            "name" => "nome",
            "class" => "form-control",
            "id" => "nome",
            "maxlength" => "255",
        ));


        echo form_label("Comando", "descricao");
        echo form_input(array(
            "name" => "descricao",
            "class" => "form-control",
            "id" => "descricao",
            "maxlength" => "255",
            "type" => "TEXT",
        ));

        echo("<br />");

        echo form_label("Forma de Pagamento", "formaPagamento");
        $formaPagamento = [
            'debito' => 'debito',
            'credito' => 'credito',
        ];
        echo form_dropdown('formaPagamento', $formaPagamento, 'debito');

        echo("<br /><br />\n");

        echo form_label("Item Pago?", "itemPago");
        $formaPagamento = [
            'SIM' => 'SIM',
            'NAO' => 'NAO',
        ];
        echo form_dropdown('itemPago', $itemPago, 'SIM');

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
        
        echo form_button(array(
            "class" => "btn btn-primary",
            "content" => "Cadastrar",
            "type" => "submit"
        ));
        //teste form

        echo form_close();
        ?>

        </div>
    </body>
</html>