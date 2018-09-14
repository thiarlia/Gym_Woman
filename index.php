<?php 
 include 'menuPrincipal2.php';
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menu Principal</title>
</head>
<body>

	
	<!-- INICIO DO CARROSSEL-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			
			<div class="carousel-item active">
				<img style = "height: 600px; width: 200px;" class="d-block w-100" src="material/imagens/fundo.jpg" alt="First slide">
				<div class="carousel-caption d-md-block" style = "margin-bottom: 4%;">
					<img src = "material/imagens/logogym2.png" style = "width: 25%;">
					<h1 class="wow fadeInDown heading" data-wow-delay=".4s" style = "color: #FA58D0; font-family: 'Permanent Marker', cursive; font-size: 400%;">Academia GymWoman</h1>
					<p class="fadeInUp wow" data-wow-delay=".6s" style = "color: #FA58D0 ;  font-family: 'Righteous', cursive; font-size: 250%;">&nbsp</p>
				</div>
			</div>
			<div class="carousel-item ">
				<img style = "height: 600px; width: 200px;" class="d-block w-100" src="material/imagens/academia-foto.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img style = "height: 600px; width: 200px;" class="d-block w-100" src="material/imagens/carrossel3.jpg" alt="Third slide">
			</div>
			<div class="carousel-item">
				<img style = "height: 600px; width: 200px;" class="d-block w-100" src="material/imagens/imagem14.jpg" alt="Fourth slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- FIM DO CARROSSEL-->
	
	
	<!--CARDS-->
	
	<div align = "center" style = "margin-top: 7%;">
		<h1 id = "legendadapagina">Destaques</h1>
	</div>
	<div class="container" style = "margin-top: 7%;">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #FA58D0">
					<img class="card-img-top" src="material/imagens/imagem7.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Musculação</h5>
						<p class="card-text">A partir de 59,00 os planos para musculação com personal training.</p>
						<button type="button" class="btn" style = "background-color: #FA58D0">Assinar</button>
					</div>
				</div>
			</div>
			<div class="col-sm">
			  <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #FA58D0">
					<img class="card-img-top" src="material/imagens/imagem7.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Pacote Premium</h5>
						<p class="card-text">Por apenas 99,90 você tem acesso a todas as modalidades.</p>
						<button type="button" class="btn" style = "background-color: #FA58D0">Assinar</button>
					</div>
				</div>
			</div>
			<div class="col-sm">
			  <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #FA58D0">
					<img class="card-img-top" src="material/imagens/imagem7.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Kids</h5>
						<p class="card-text">Um espaço feito somente para crianças durante o treino dos pais.</p>
						<button type="button" class="btn" style = "background-color: #FA58D0">Assinar</button>
					</div>
				</div>
			</div>
		  </div>
	</div>
	<!--CARDS-->
	
	
	
	<!--CARD PARA EQUIPAMENTOS-->
	<div class = "container" id = "divequipamentos">
		<div class="card bg-dark text-white" id = "textoequipamentos">
			<img class="card-img" src="material/imagens/imagem22.jpg" alt="Card image" style = "height: 400px; width: 1200px;">
			<div class="card-img-overlay" style = "margin-top: 10%;">
				<h5 class="card-title" style = "font-size: 200%;">O que você sabe sobre os equipamentos ?</h5>
				<p class="card-text">Nós da GymWoman te explicaremos o que alguns dos equipamentos mais importantes são capazes de fazer.</p>
				<button type="button" class="btn" style = "background-color: #FA58D0"><a href = "equipamentos.php" id = "linkbranco">Saiba mais</a></button>
			</div>
		</div>
	</div>
	<!--CARD PARA EQUIPAMENTOS-->
	
	
	
	<div style = "margin-top: 7%;"> 
		<h1 id = "legendadapagina">PATROCINADORES</h1>
    </div>
	
	<div class="container" style = "margin-top: 7%;" align = "center">
		<div class="row">
			<div class="col-sm">
			  <img src="material/imagens/adidas.png" alt="Card image" id = "patrocinadores">
			</div>
			<div class="col-sm">
				<img src="material/imagens/herbalife.png" alt="Card image" id = "patrocinadores">
			</div>
			<div class="col-sm">
				<img src="material/imagens/selma.png" alt="Card image" id = "patrocinadores">
			</div>
		</div>
	</div>
	
	<div class="container" style = "margin-top: 7%;" align = "center">
		<div class="row">
			<div class="col-sm">
			  <img src="material/imagens/netshoes.jpg" alt="Card image" id = "patrocinadores">
			</div>
			<div class="col-sm">
				<img src="material/imagens/queen.jpg" alt="Card image" id = "patrocinadores">
			</div>
			<div class="col-sm">
				<img src="material/imagens/ifce.jpg" alt="Card image" id = "patrocinadores">
			</div>
		</div>
	</div>
	</br>
	</br>
	</br>
</body>
</html>
