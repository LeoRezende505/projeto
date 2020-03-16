<?php
	require_once('conexao.php');
	Class produto extends conexao{
		private $nome; 
		private $descr;
		private $valor;
		private $imagem;
		protected $tabela = 'produtos';

		//construtor
		public function __construct(){
			parent::__construct();	
		}
	
		//Getters e setters
		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getDescr(){
			return $this->descr;
		}

		public function setDescr($descr){
			$this->descr = $descr;
		}

		public function getValor(){
			return $this->valor;
		}

		public function setValor($valor){
			$this->valor = $valor;
		}

		public function getImagem(){
			return $this->imagem;
		}

		public function setImagem($imagem){
			$this->imagem = $imagem;
		}

		
		//métodos personalizados (funções)
		

		//consulta no banco
		public function consulta(){
			$sql = "SELECT * FROM $this->tabela";
			$result = $this->conn->query($sql) 
			or die("Falha na consulta");
			
			if($result == true){
				return $result;
			}else{
				die("Falha na consulta!");
			}
			$this->conn->close();
		}
		
		//cadastro
		public function cadastro($nome,$descr,$valor,$imagem){
			$sql = "INSERT INTO $this->tabela(nome,descr,valor,imagem) VALUES(?,?,?,?)";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('ssds',$nome,$descr,$valor,$imagem);
			$stmt->execute();
			
			if($stmt == true){
				header('Location:listar.php?msg=insert');
			}else{
				die("Falha no cadastro!");
			}
			$stmt->close();
			$this->conn->close();
		}

		//editar
		public function editar($nome,$descr,$valor,$id){
			$sql = "UPDATE $this->tabela SET nome = ?,descr = ?,valor = ?
			WHERE idProduto = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('ssdi',$nome,$descr,$valor,$id);
			$stmt->execute();
			
			if($stmt == true){
				header('Location:listar.php?msg=edit');
			}else{
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();	
		}
		
		//consultar por id
		public function consultaID($id){
			$sql = "SELECT nome,descr,valor FROM $this->tabela
			WHERE idProduto = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('i',$id);
			$stmt->execute();
			
			if($stmt == true){
				$stmt->store_result();
				$stmt->bind_result($nome,$descr,$valor);
				$stmt->fetch();
				
				$this->setNome($nome);
				$this->setDescr($descr);
				$this->setValor($valor);
				
			}else{
				die("Falha na consulta!");
			}
			$stmt->close();
			$this->conn->close();	
		}
		
		//apagar do banco
		public function apagar($id){
			$sql = "DELETE FROM $this->tabela
			WHERE idProduto = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('i',$id);
			$stmt->execute();
			
			if($stmt == true){
				header('Location:listar.php?msg=del');
			}else{
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}
		
		//pesquisa por texto
		public function pesquisa($txt){
			$sql = "SELECT nome,descr,valor FROM $this->tabela
			WHERE nome like ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('s',$txt);
			$stmt->execute();
			$stmt->store_result();
				if($stmt->num_rows > 0){
			echo "<table class='table table-bordered table-striped'>
					<thead>
						<tr>
							<th>NOME</th>
							<th>DESCRIÇÃO</th>
							<th>VALOR</th>
						</tr>
					</thead>
					<tbody>";
			$stmt->bind_result($nome,$descr,$valor);		
			while($stmt->fetch()){
					echo "  <tr>
								<td>$nome</td>
								<td>". mb_strimwidth($descr, 0, 140, '...')."</td>
								<td>R$ ".number_format($valor,2,',','.')."</td>
							</tr>";

				}
					echo "</tbody>
					</table>";		
					
					
				}else{
					echo "Nenhum resultado encontrado.";
				}
			$stmt->close();
			$this->conn->close();
		
		}
		//Mudar a foto do produto
		public function mudaFoto($imagem,$id){
			$sql = "UPDATE $this->tabela SET imagem = ?
			WHERE idProduto = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('si',$imagem,$id);
			$stmt->execute();
			
			if($stmt == true){
				header('Location:listar.php?msg=edit');
			}else{
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();	
		}
		
		
	}
?>









