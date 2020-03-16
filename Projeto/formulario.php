			<form method="POST" action="cadastra.php" enctype="multipart/form-data">
				<input type="text" name="nome"
				class="form-control"
				placeholder="Nome" required />
				<br/>
				
				<textarea name="descr" placeholder="Descrição"
				class="form-control"
				required></textarea>
				<br/>
				
				<input type="number" name="valor" 
				placeholder="Valor" class="form-control" 
				step="0.01" min="0.01" max="9999.99" required />
				<br/>
				
				<input type="file" name="foto" 
				class="form-control" required />
				<br/>
				
				<input type="submit" 
				class="btn btn-primary"
				value="Cadastrar Produto" />
			</form>