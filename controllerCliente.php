<?php
	include "modelCliente.php";
	
	if(isset($_POST['enviar'])){
        
        $cliente = new Cliente();

        //$senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);    
        
        $cliente->setNome($_POST['nome']);
        $cliente->setEndereco($_POST['endereco']);
        $cliente->setBairro($_POST['bairro']);
        $cliente->setCidade($_POST['cidade']);
        $cliente->setEmail($_POST['email']);
        $cliente->setTelefone($_POST['telefone']);
        

        $modelo = new ModelCliente();
        $modelo->adicionar($cliente);
    }

?>