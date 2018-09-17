<?php
	include "modelAtividade.php";
	
	if(isset($_POST['enviar'])){
        
        $atividade = new Atividade();

        //$senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);    
        
        $atividade->setNome($_POST['nome']);
        $atividade->setValor($_POST['valor']);
        $atividade->setDescricao($_POST['descricao']);

        $modelo = new ModelAtividade();
        $modelo->adicionar($atividade);
    }

?>