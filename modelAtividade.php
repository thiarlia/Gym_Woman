<?php

    include "Atividade.php";
	class ModelAtividade {
		public function adicionar(Atividade $atividade){
				include "dbgymwoman.php";
				$query = "INSERT INTO atividade(nome, valor, descricao) VALUES (:nome, :valor, :descricao)";
				
				$statement = $connection->prepare($query);
				
				$valores = array();
				$valores[':nome'] = $atividade->getNome();
				$valores[':valor'] = $atividade->getValor();
                $valores[':descricao'] = $atividade->getDescricao();
				
				$result = $statement->execute($valores);
				
				if(empty ($result) ){
					echo "Inserir atividade deu erro.";
					print_r($statement->errorInfo());
				}else {
					echo "Inserir atividade deu certo";
				}
				
		}
        
               public function listar (){
                   include 'dbgymwoman.php';
                $query = "SELECT nome,valor,descricao FROM atividade";
                
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
        
        
        public function editar(Atividade $atividade){
            include "dbgymwoman.php";
            
            $query = "UPDATE atividade SET nome = :nome,valor = :valor, descricao = :descricao WHERE id = :id";
            
            $statement = $connection->prepare($query);
            
            $valores = array();
            $valores[':nome'] = $atividade->getNome();
            $valores[':valor'] = $atividade->getValor();
            $valores[':descricao'] = $atividade->getDescricao();
           
            $result = $statement->execute($valores);
            
            if(empty ($result) ){
                echo "Atualizar ativ deu erro.";
            }else {
                echo "Atualizar ativ deu certo";
            }
            
        }
        
        public function remover($id){
            include 'dbgymwoman.php';
            $query = "DELETE FROM atividade WHERE id = :id";
            
            $statement = $connection->prepare($query);
            
            $valores = array();
            $valores[':id'] = $id; 
            $result = $statement->execute($valores);
            
            
            if(empty ($result) ){
                echo "Remover ' atividade deu erro.";
            }else{
                echo "Remover atividade deu certo";
            }
            
        }
	}

?>