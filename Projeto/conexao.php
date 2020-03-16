<?php
	Abstract Class conexao{
		public $servidor = 'localhost';
		public $user = 'root';
		public $pass = '';
		public $banco = 'exemplo1';
		public $conn;
		
		public function __construct(){
			$this->conexao();
		}
			
		private function conexao(){
			$this->conn = new mysqli($this->servidor, 
			$this->user, $this->pass, $this->banco);
			
		}
	}
?>





