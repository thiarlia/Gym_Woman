<?php
    include 'menuPrincipal2.php';
    include 'controllerCliente.php';
?>

<!DOCTYPE html>
    
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Clientes</title>
    </head>
    
    <body>
        <div style = "width: 100%;">
        <table class="table" style = "margin-top: 10%;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($listaDeCliente as $cl){

    ?>

    <tr>
    <th scope="row">
    <?php echo $cl['id']; ?>
    </th>

    <td><?php echo $cl['nome'];?></td>
    <td><?php echo $cl['endereco'];?></td>
    <td><?php echo $cl['bairro'];?></td>
    <td><?php echo $cl['cidade'];?></td>
    <td><?php echo $cl['telefone'];?></td>
    <td><?php echo $cl['email'];?></td>
    <td>
        <button type="button" class="btn btn-danger btn-sm">Deletar</button>
        <button type="button" class="btn btn-warning btn-sm">Editar</button>
    </td>
    </tr> 
    <?php
    }
    ?>
    
  </tbody>
            
</table>
        </div>
    </body>
</html>