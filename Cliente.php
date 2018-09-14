<?php 
    class Cliente{
        private $nome;
        private $endereco;
        private $bairro;
        private $cidade;
        private $email;
        private $telefone;
        
        public function getNome(){
            return $this->nome;
        }
        
        
        public function getEndereco(){
            return $this->endereco;
        }
        
        
        public function getBairro(){
            return $this->bairro;
        }
        
        
        public function getCidade(){
            return $this->cidade;
        }
        
        
        public function getEmail(){
            return $this->email;
        }
        
        public function getTelefone(){
            return $this->telefone;
        }
         
        
        public function setNome($a){
             $this->nome = $a;
        }
        
        public function setEndereco($a){
             $this->endereco = $a;
        }
        
        public function setBairro($a){
             $this->bairro = $a;
        }
        public function setEmail($a){
             $this->email= $a;
        }
        
        public function setTelefone($a){
             $this->telefone = $a;
        }
        
    }

?>