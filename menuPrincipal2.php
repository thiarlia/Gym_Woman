<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- LINK PARA RESPOSIVIDADE-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Righteous');
		@import url('https://fonts.googleapis.com/css?family=Permanent+Marker');
		@import url('https://fonts.googleapis.com/css?family=Shadows+Into+Light');

		nav#menuPrincipal a{
			font-family: 'Permanent Marker', cursive;
			font-size: 20px;
			color: #FA58D0;
		}
		
		h1#legendadapagina {
			font-family: 'Permanent Marker', cursive; 
			font-size: 70px; 
			text-align: center;
			margin-top: 4%;
		}
		div img#patrocinadores {
			width: 40%;
		}
		div#divequipamentos {
			width: 90%;
			margin-top: 8%;
			margin-left: 7%;
			text-align: center;
		}
		div#textoequipamentos {
			text-align: center;
			font-family: 'Shadows Into Light', cursive;
			font-size: 180%;
		}
		a#linkbranco{
			text-decoration: none;
			color: white !important;
		}
		button {
			color: white !important;
		}
	</style>
	<body>
	
		<nav class="navbar navbar-dark" style="background-color: black;" id = "menuPrincipal">
			  <a class="navbar-brand" href="index.php"><img src = "material/imagens/logogym2.png" style = "width: 15%; margin-right: 15%;"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav" id = "listaMenu">
					<li>
						<a class="nav-item nav-link active" href="index.php"></i>&nbspHOME&nbsp</a>
					</li>
					<li>
						<a class="nav-item nav-link active" href="galeria.php">GALERIA&nbsp</a>
					</li>
					<li>
						<a class="nav-item nav-link active" href="precos.php">PREÇOS&nbsp</a>
					</li>
					<li>
						<a class="nav-item nav-link active" href="horarios.php">HORÁRIOS&nbsp</a>
					</li>
					<li>
						<a class="nav-item nav-link active" href="cadastro.php">CADASTRAR-SE&nbsp</a>
					</li>
					<li>
						<a class="nav-item nav-link active" href="time.php">TIME&nbsp</a>
					</li>
					<li>
						<a class="nav-item nav-link active" href data-toggle="modal" data-target ="#contato">CONTATOS</a>
					</li>
				</ul>
			  </div>
		</nav>
	
	
	
		<!--MODAL BY LUCIANA-->
			<div class="modal" id=contato tabindex="-1" role="dialog" style = "font-family: 'Righteous', cursive;">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				<h3 class="modal-title">Fale conosco</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
				  </div>
				  <div class="modal-body">
				<p>Email: academiaGymwoman@gmail.com</p>
				<p>Endereço: Av Granja Portugual, Aldeota-Fortaleza(CE)</p>
				<p>Telefone: (85)3371-4952</p>
				  </div>
				  <div class="modal-footer">
				<button type="button" class="btn btn" style = "background-color:  #FA58D0;" data-dismiss="modal">Sair</button>
				  </div>
				</div>
			  </div>
			</div>
		<!--MODAL BY LUCIANA-->	
	</body>

</html>
