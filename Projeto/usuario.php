 <?php
	require_once('conexao.php');
	class usuario extends conexao
	{
		private $usuario;
		private $email;
		private $senha;
		private $tabela = 'usuarios';

		public function __construct()
		{
			parent::__construct();
		}


		public function getUsuario()
		{
			return $this->usuario;
		}

		public function setUsuario($usuario)
		{
			$this->usuario = $usuario;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function getSenha()
		{
			return $this->senha;
		}

		public function setSenha($senha)
		{
			$this->senha = $senha;
		}



		// logar usuario
		public function logar($user, $pass)
		{
			$sql = "SELECT usuario,senha FROM $this->tabela 
			WHERE usuario = ? AND senha = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('ss', $user, $pass);
			$stmt->execute();
			$stmt->store_result();

			var_dump($stmt);

			if ($stmt->num_rows == 1) {
				session_start();
				$_SESSION['logado'] = true;
				header('Location: admin.php');
			} else {
				header('Location: login.php?erro=login');
			}
			$stmt->close();
			$this->conn->close();
		}
		//cadastrar novo usu�rio
		public function novoUser($user, $mail, $pass, $avatar)
		{
			$sql = "INSERT INTO $this->tabela(usuario,email,senha) VALUES(?,?,?)";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('sss', $user, $mail, $pass);
			$stmt->execute();

			if ($stmt == true) {
				header('Location:admin.php?msg=insert');
			} else {
				die("Falha no cadastro!");
			}
			$stmt->close();
			$this->conn->close();
		}

		//consulta no banco
		public function listar()
		{
			$sql = "SELECT * FROM $this->tabela";
			$result = $this->conn->query($sql);

			if ($result == true) {
				return $result;
			} else {
				die("Falha na consulta!");
			}
			$this->conn->close();
		}

		//trocar senha
		public function novaSenha($pass, $id)
		{
			$sql = "UPDATE $this->tabela SET senha = ?
			WHERE idUsuario = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('si', $pass, $id);
			$stmt->execute();

			if ($stmt == true) {
				header('Location:admin.php?msg=edit');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}
		//excluir usuario
		public function excluir($id)
		{
			$sql = "DELETE FROM $this->tabela
			WHERE idUsuario = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('i', $id);
			$stmt->execute();

			if ($stmt == true) {
				header('Location:admin.php?msg=del');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}
		//Mudar avatar
		public function mudarAvatar($avatar, $id)
		{
			$sql = "UPDATE $this->tabela SET avatar = ?
			WHERE idUsuario = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('si', $avatar, $id);
			$stmt->execute();

			if ($stmt == true) {
				header('Location:admin.php?msg=edit');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}
	} //fim da classe usuario
