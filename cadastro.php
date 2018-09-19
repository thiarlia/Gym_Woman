<?php 
    include 'controllerCliente.php';
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
		<h1 id = "legendadapagina">CADASTRAR-SE</h1>
    </div>
	
	
	<div class = "container" style = "margin-top: 3%;">
		<form action="" method = "POST">
			<div class = "form-group">
				<label for = "nome">Nome completo</label>
				<input type = "text" id = "nome" name = "nome" class = "form-control">
			</div>
			<div class = "form-group">
				<label for = "endereco">Endereço</label>
				<input type = "text" id = "endereco" name = "endereco" class = "form-control">
			</div>
			<div class = "row">
				<div class = "form-group col-md-6">
					<label for = "bairro">Bairro</label>
					<input type = "text" id = "bairro" name = "bairro" class = "form-control">
				</div>
				<div class = "form-group col-md-6">
					<label for = "cidade">Cidade</label>
					<input type = "text" id = "cidade" name = "cidade" class = "form-control">
				</div>
			</div>
			<div class = "row">
				<div class = "form-group col-md-4">
					<label for = "telefone">Telefone/celular</label>
					<input type = "text" id = "telefone" name = "telefone" class = "form-control">
				</div>
				<div class = "form-group col-md-4">
					<label for = "email">Email</label>
					<input type = "text" id = "email" name = "email" class = "form-control">
				</div>
			</div>
            <label for="">Atividade(s)</label>
            <div class = "row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="atividade1">
                    <label class="form-check-label" for="atividade1">Musculação&nbsp;&nbsp;&nbsp;</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="atividade1">
                    <label class="form-check-label" for="atividade1">Zumba&nbsp;&nbsp;&nbsp;</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="atividade1">
                    <label class="form-check-label" for="atividade1">Funcional&nbsp;&nbsp;&nbsp;</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="atividade1">
                    <label class="form-check-label" for="atividade1">Muay Thai&nbsp;&nbsp;&nbsp;</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="atividade1">
                    <label class="form-check-label" for="atividade1">Pilates&nbsp;&nbsp;&nbsp;</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="atividade1">
                    <label class="form-check-label" for="atividade1">Yoga&nbsp;&nbsp;&nbsp;</label>
                </div>
            </div>
			
			<div class = "row">
				<button name = "enviar" type = "submit" class = "btn" style = "background-color: #FA58D0; margin-left: 93%;">Enviar</button>
			</div>
		</form>
	
	</div>
	
	
</body>
</html>
	
	
	
	
	
	