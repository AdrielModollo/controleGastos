<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
        <?= anchor('inicio/index','Voltar', array("class" => "btn btn-primary"))?>
        <?= anchor('sistemas/formulario','Sistema Novo', array("class" => "btn btn-primary"))?>
            <table class="table">
               
                <tr>
                    <th>Codigo</th>
                    <th>Projeto</th>
                    <th>Programador</th>
                    <th>Cliente</th>
                </tr>

                <tr>
                <?php foreach($sistemas as $sistema) : ?>
                    <td><?=$sistema["Codigo"] ?></td>
                    <td><?=$sistema["Projeto"] ?></td>
                    <td><?=$sistema["Programador"] ?></td>
                    <td><?=$sistema["Cliente"] ?></td>
                    <td> 
                    <form method="POST" action="delete/<?=  $sistema["Codigo"]; ?>">
                        <input type="hidden" name="sistema_codigo" value="<?= $sistema["Codigo"]; ?>">
                        <input type="submit" value="Excluir Vinculo">
                    </form>
                    </td>
                </tr>
           
            <?php endforeach ?>
            </table>
           
           
           
        <div>
    </body>
</html>