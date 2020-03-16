			<form method="POST" action="newUser.php" enctype="multipart/form-data">
				<input type="text" name="usuario"
				class="form-control"
				placeholder="Nome de Usuário" required />
				<br/>
				
				<input type="email" name="email" 
				placeholder="Digite seu email" class="form-control" 
				required />
				<br/>
				
				<input type="password" name="senha" 
				placeholder="Digite uma senha" class="form-control" 
				required />
				<br/>
				
				<input type="password" name="senha2" 
				placeholder="Repita a senha" class="form-control" 
				required />
				<br/>				
		
				
				<input type="file" name="avatar" 
				class="form-control" required />
				<br/>
				
				<input type="submit" 
				class="btn btn-primary"
				value="Criar Usuário" />
			</form>