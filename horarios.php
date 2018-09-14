<?php 
 include 'menuPrincipal2.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
		<meta charset="utf-8">
		<title>Grade de aula ;) </title>		
		<link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.1/normalize.css"> <!-- link do materialize para tirar o espaçamento do paragrafo   -->
		
		<style>
			h6{
				background-color: #FA58D0;
				text-align:center;
				font-family: 'Righteous', cursive;
				font-size: 25px;
				
			}
			h5{
			    font-family: 'Permanent Marker', cursive; 
				font-size: 75px;
				text-align: center;
			}
			th{
			   font-family: 'Righteous', cursive;			
			}
			
		</style>
	
	</head>
	<body>
	
	
		<div> 
		   <h1 id = "legendadapagina">Horários</h1>
		</br></br></br>
		</div>
		<div id="lugar" class = "container">	
			<table class="table table-bordered">
				<thead>
					<tr style= "background-color: #FA58D0; text-align: center; font-size: 18px;"  >
					  <th scope="col"></th>
					  <th scope="col">Musculação</th>
					  <th scope="col">Zumba</th>
					  <th scope="col">Treino Funcional</th>
					  <th scope="col">Muay thai</th>
					  <th scope="col">Pilates</th>
					  <th scope="col">Yoga</th>
					</tr>
				</thead>
				<tbody>
					<tr style= "text-align: center;">
					  <th scope="row">Manhã</th>
					  <td>06:00 as 12:00</td>
					  <td>07:00 ás 08:30</br>10:00 as 11:30</td>
					  <td>07:00 ás 08:30</br>10:00 as 11:30</td>
					  <td>07:00 ás 08:30</br>10:00 as 11:30</td>
					  <td>07:00 ás 08:30</br>10:00 as 11:30</td>
					  <td>07:00 ás 08:30</br>10:00 as 11:30</td>
					</tr>
					
					<tr style= "text-align: center;">
					  <th scope="row">Tarte</th>
					  <td>13:00 ás 17:00</td>
					  <td>13:00 as 14:30</br>16:00 as 17:30</td>
					  <td>13:00 as 14:30</br>16:00 as 17:30</td>
					  <td>13:00 as 14:30</br>16:00 as 17:30</td>
					  <td>13:00 as 14:30</br>16:00 as 17:30</td>
					  <td>13:00 as 14:30</br>16:00 as 17:30</td>
					</tr>
					
					<tr style= "text-align: center;">
					  <th scope="row">Noite</th>
					  <td>18:00 ás 00:00</td>
					  <td>18:00 as 19:30</br>20:00 as 21:30</td>
					  <td>18:00 as 19:30</br>20:00 as 21:30</td>
					  <td>18:00 as 19:30</br>20:00 as 21:30</td>
					  <td>18:00 as 19:30</br>20:00 as 21:30</td>
					  <td>18:00 as 19:30</br>20:00 as 21:30</td>
					</tr>
					
					
				</tbody>
			</table>
		</div>
	
   </body>
</html>