<?php 
 include 'menuPrincipal2.php';
 include 'controllerAtividade.php';
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
    
    <div> 
		<h1 id = "legendadapagina">ATIVIDADES</h1>
    </div>
    
    
    <div class="container" style="margin-top:5%;">
		<div class="card-deck" style="margin-left:30px;">
		   <div class="card mb-3" style="max-width: 18rem; box-shadow: 8px  20px 20px #FA58D0;">
                     <i class="lg fas fa-dumbbell" style="text-align:center; font-size:60px; margin-top:8px;"></i>
			<div class="card-body text">
			  <h5 class="card-title">Musculação</h5>
			  <p class="card-text"> Vai ajudar a desenvolver os musculos do corpo, assim como também pode auxiliar na perda de peso ou no ganho de massa muscular.</p>
			  <h3>R$ 50,00</h3>
			</div>
		   </div>
		   <div class="card mb-3" style="max-width: 18rem; box-shadow: 8px  20px 20px #FA58D0;">
			<i class="fas fa-music" style="text-align:center; font-size:60px; margin-top:8px;"></i>
			 <div class="card-body text">
			    <h5 class="card-title">Zumba</h5>
			    <p class="card-text">Inspirada em danças latinas, a zumba auxilia no condicionamento físico deixando coxas e bumbuns durinhos, ajuda na perda de peso, e a ter uma qualidade de vida melhor .</p>
			    <h3>R$40,00</h3>
			 </div>
		   </div>
		   <div class="card  mb-3" style="max-width: 18rem; box-shadow: 8px  20px 20px #FA58D0;">
		     <i class="fab fa-cloudsmith" style="text-align:center; font-size:80px; margin-top:8px;"></i>
			 <div class="card-body text">
			    <h5 class="card-title">Funcional</h5>
			    <p class="card-text">Treina o corpo para realizar atividades do cotidiano, o treinamento funcional auxilia na perda de peso e em um condicionamento físico melhor e de uma forma mais diversificada em relação a musculação.</p>
			    <h3>R$50,00</h3>
			  </div>
		   </div>
		</div>
	
		<div class="card-deck" style="margin-left:30px;">
		  <div class="card mb-3" style="max-width: 18rem; box-shadow: 8px  20px 20px #FA58D0;">
		    <i class="fas fa-people-carry" style="text-align:center; font-size:60px; margin-top:9px;"></i>
		      <div class="card-body text">
			 <h5 class="card-title">MuayThai</h5>
			 <p class="card-text">É uma arte marcial originária da Tailândia,inclui golpes de combate em pé, e é conhecida como a arte das oito armas, alguns benefícios são maior flexibilidade, músculos mais definidos e menos gordurinhas.</p>
			 <h3>R$55,00</h3>
		      </div>
		   </div>
		  <div class="card mb-3" style="max-width: 18rem;box-shadow: 8px  20px 20px #FA58D0;">
		    <i class="fas fa-basketball-ball" style="text-align:center; font-size:70px; margin-top:8px;"></i>
		       <div class="card-body text">
			  <h5 class="card-title">Pilates</h5>
			  <p class="card-text">É um método composto por exercícios físicos e alongamentos que utilizam o peso do próprio corpo na sua execução, o Pilates mistura um treino de força e flexibilidade que ajudam a melhorar a postura, alongar e tonificar os músculos sem exageros.</p>
			  <h3>R$70,00</h3>
		       </div>
		  </div>
		  <div class="card mb-3" style="max-width: 18rem; box-shadow: 8px  20px 20px #FA58D0;">
		    <i class="fas fa-child" style="text-align:center; font-size:70px; margin-top:8px;"></i>
		      <div class="card-body text">
			  <h5 class="card-title">Yoga</h5>
			  <p class="card-text">Referente as disciplinas praticadas na índia, Yoga é harmonizar o corpo com a mente e a respiração, através de técnicas de respiração, posturas de yoga e meditação.</p>
			  <h3>R$80,00</h3>
		      </div>
		    </div>
		</div>
	</div>
    
    
    
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
</body>
</html>
