<?php

    include "Cliente.php";
	class ModelCliente {
		public function adicionar(Cliente $cliente){
				include "dbgymwoman.php";
				$query = "INSERT INTO cliente(nome, endereco, bairro, cidade, email, telefone) VALUES (:nome, :endereco, :bairro, :cidade, :email, :telefone)";
				
				$statement = $connection->prepare($query);
				
				$valores = array();
				$valores[':nome'] = $cliente->getNome();
				$valores[':endereco'] = $cliente->getEndereco();
                $valores[':bairro'] = $cliente->getBairro();
                $valores[':cidade'] = $cliente->getCidade();
                $valores[':email'] = $cliente->getEmail();
                $valores[':telefone'] = $cliente->getTelefone();
                
				
				$result = $statement->execute($valores);
				
				if(empty ($result) ){
					echo "Inserir cliente deu erro.";
					print_r($statement->errorInfo());
				}else {
					echo "Inserir cliente deu certo";
				}
				
		}
	}

?>