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
        
        
               public function listar (){
                   include 'dbgymwoman.php';
                $query = "SELECT id, nome,endereco,bairro, cidade, telefone, email FROM cliente";
                
                $statement = $connection->prepare($query);
                //executa a query
                $result = $statement->execute();
                
                //junta todos os usuários retornados em um array.
                //pro exemplo usuário
                $u = $result[0];//pega primeiro usuário
                echo $u['nome'];
            
                $u = result[1];
                echo $u['nome'];//pega o segundo
                $result = $statement->fetchAll();
                
                return $result;
        }
        
        
        public function editar(Cliente $cliente){
            include "dbgymwoman.php";
            
            $query = "UPDATE cliente SET nome = :nome, endereco = :endereco, bairro = :bairro, cidade = :cidade, telefone = :telefone, email = :email WHERE id = :id";
            
            $statement = $connection->prepare($query);
            
            $valores = array();
            $valores[':nome'] = $cliente->getNome();
            $valores[':endereco'] = $cliente->getEndereco();
            $valores[':bairro'] = $cliente->getBairro();
            $valores[':cidade'] = $cliente->getCidade();
            $valores[':telefone'] = $cliente->getTelefone();
            $valores[':email'] = $cliente->getEmail();
            
            $result = $statement->execute($valores);
            
            if(empty ($result) ){
                echo "Atualizar usuário deu erro.";
            }else {
                echo "Atualizar usuário deu certo";
            }
            
        }
        
        public function remover($id){
            include 'dbgymwoman.php';
            $query = "DELETE FROM cliente WHERE id = :id";
            
            $statement = $connection->prepare($query);
            
            $valores = array();
            $valores[':id'] = $id; 
            $result = $statement->execute($valores);
            
            
            if(empty ($result) ){
                echo "Remover usuário deu erro.";
            }else{
                echo "Remover usuário deu certo";
            }
            
        }
	}

?>