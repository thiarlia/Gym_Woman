<?php 
    class Atividade{
        private $nome;
        private $valor;
        private $descricao;
        
        public function getNome(){
            return $this->nome;
        }
        
        
        public function getValor(){
            return $this->valor;
        }
        
        
        public function getDescricao(){
            return $this->descricao;
        }
        
            
        
        public function setNome($a){
             $this->nome = $a;
        }
        
        public function setValor($a){
             $this->valor = $a;
        }
        
        public function setDescricao($a){
             $this->descricao = $a;
        }
    }

?>