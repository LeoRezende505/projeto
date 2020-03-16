<?php
	require_once('produtos.php');
	$id = $_GET['id'];
	$produto = new produto();
	$consultaID = $produto->consultaID($id);

	?>
			<form method="POST" action="altera.php?id=<?php echo $id; ?>">
				<input type="text" name="nome"
				class="form-control"
				value="<?php echo $produto->getNome(); ?>" required />
				<br/>
				
				<textarea name="descr" 
				class="form-control" required>
				<?php echo $produto->getDescr(); ?>
				</textarea>
				<br/>
				
				<input type="number" name="valor" 
				value="<?php echo $produto->getValor(); ?>" 
				class="form-control" 
				step="0.01" min="0.01" max="9999.99" required />
				<br/>
				
				<input type="submit" 
				class="btn btn-primary"
				value="Alterar Produto" />
			</form>