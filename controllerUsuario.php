<?php
	include "modelUsuario.php";
	
	if(isset($_POST['enviar'])){
        
        $usuario = new Usuario();

        //$senha_criptografada = password_hash($_POST['password'], PASSWORD_DEFAULT);    
        
        $usuario->setFirstName($_POST['nome']);
        $usuario->setLastName($_POST['idade']);


        $modelo = new ModelUsuario();
        $modelo->adicionar($usuario);
    }

?>