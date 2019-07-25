<h3>Adicionar Funcionario</h3>

<?php if($error == 'exist'): ?>
	<div class="aviso">Campo obrigatório</div>
<?php endif; ?>

<form method="POST" action="<?php echo BASE_URL; ?>funcionario/add_save">

	Nome:<br/>
	<div class="form-group">
		<input type="text" name="nome" class="form-control" required>
	</div>
	<br/><br/>
	

	Data Nascimento:<br/>
	<div class="form-group">
		<input type="date" name="nascimento" class="form-control" required/>
	</div>
	<br/><br/>

	Cidade:<br/>
	<div class="form-group">
		<select name="cidade" class="form-control">
			<option value="Sao Paulo">São Paulo</option>
			<option value="Belo Horizonte">Belo Horizonte</option>
			<option value="Rio de Janeiro">Rio de Janeiro</option>
		</select>
	</div>
	<br/><br/>

	Telefone:<br/>
	<div class="form-group">
		<input type="tel" name="telefone" class="form-control" required/><br/><br/>
	</div>

	<div class="form-group">
		<input type="submit" value="Adicionar" class="form-control btn btn-primary"/>
	</div>

</form>