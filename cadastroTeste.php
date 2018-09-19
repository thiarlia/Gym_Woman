<?php 
    include 'controllerAtividade.php';
    include 'menuPrincipal2.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Cadastrar-se</title>
	<link rel="stylesheet" type="text/css" href=".material/css/estilo.css">

	</head>
<body>

	<div> 
		<h1 id = "legendadapagina">TESTE</h1>
    </div>
	
	
	
	<div class = "container" style = "margin-top: 3%;">
		<form action="" method = "POST">
			<div class = "form-group">
				<label for = "nome">Nome</label>
				<input type = "text" id = "nome" name = "nome" class = "form-control">
			</div>
			<div class = "form-group">
				<label for = "endereco">Valor</label>
				<input type = "number" id = "valor" name = "valor" class = "form-control">
			</div>
			<div class = "row">
				<div class = "form-group col-md-6">
					<label for = "bairro">Descrição</label>
					<input type = "text" id = "descricao" name = "descricao" class = "form-control">
				</div>
				
            </div>
			
			<div class = "row">
				<button name = "enviar" type = "submit" class = "btn" style = "background-color: #FA58D0; margin-left: 93%;">Enviar</button>
			</div>
		</form>
	
	</div>
	
	
</body>
</html>
	
	
	
	
	
	