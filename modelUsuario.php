<?php
	include 'usuarioAcademia.php';
	class ModelUsuario {
		public function adicionar(Usuario $usuario){
				include "dbAcademia.php";
				$query = "INSERT INTO usuario(nome, idade) VALUES (:nome, :idade)";
				
				$statement = $connection->prepare($query);
				
				$valores = array();
				$valores[':nome'] = $usuario->getNome();
				$valores[':idade'] = $usuario->getIdade();
				
				$result = $statement->execute($valores);
				
				if(empty ($result) ){
					echo "Inserir usuário deu erro.";
					print_r($statement->errorInfo());
				}else {
					echo "Inserir usuário deu certo";
				}
				
		}
	}

?>