<?php 
	class UsuarioAcademia {
		private $id;
		private $nome;
		private $idade;
		
		public function getId(){
            return $this->id;
        }
        public function setId($a){
             $this->id = $a;
        }
		
		
		public function getNome(){
            return $this->nome;
        }
        public function setNome($a){
             $this->nome = $a;
        }
		
		
		public function getIdade(){
            return $this->idade;
        }
        public function setIdade($a){
             $this->idade = $a;
        }
	}

?>