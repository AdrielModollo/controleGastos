<!DOCTYPE html>
         <html>
         <head>
           <title>Alterar</title>
         </head>
         <body>
           <form action="<?php echo site_url('clientes/updateDados'); ?>" method="post">
           <table align="center">
           <input type="hidden" name="Codigo" value="<?php echo $dados->Codigo; ?>"> 
              <tr>
               <td>Nome:</td>
               <td><?php echo form_input(array('id'=>'Nome', 'name'=>'Nome', 'placeholder' => 'Name', 'size'=>25, 'value'=> set_value('Nome', $dados->Nome)));?></td>
             </tr>
             <tr>
              <td>Servidor:</td>
              <td><?php echo form_input(array('id'=>'Servidor', 'name'=>'Servidor', 'placeholder' => 'Servidor', 'size'=>25, 'value'=> set_value('Servidor', $dados->Servidor)));?></td>
             </tr>
             <tr>
              <td><?php  echo form_label("Status: ",  $dados->status);
                $options = [
                    'ativo' => 'Ativo',
                    'inativo' => 'Inativo'
                ];
                echo form_dropdown('status', $options, 'large');?></td>
             </tr>
             <tr>
              <td></td>
              <td><input type="submit" value="Save" type="submit"></td>
            </tr>      
         </table>
       </form>
     </body>
  </html>
