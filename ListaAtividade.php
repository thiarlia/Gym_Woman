<?php
    include 'menuPrincipal2.php';
    include 'controllerAtividade.php';
?>

<!DOCTYPE html>
    
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Atividades</title>
    </head>
    
    <body>
        <div style = "width: 100%;">
        <table class="table" style = "margin-top: 10%;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">valor</th>
      <th scope="col">descrição</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($listaDeAtividade as $at){

    ?>

    <tr>
    <th scope="row">
    <?php echo $at['id']; ?>
    </th>

    <td><?php echo $at['nome'];?></td>
    <td><?php echo $at['valor'];?></td>
    <td><?php echo $at['descricao'];?></td>
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