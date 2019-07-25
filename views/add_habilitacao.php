<h3>Adicionar</h3>

<?php if($error == 'exist'): ?>
	<div class="aviso">Campo obrigatório</div>
<?php endif; ?>

<form method="POST" action="<?php echo BASE_URL; ?>habilitacao/add_save">

	Funcionario:<br/>
	<div class="form-group">
		<select name="funcionario" class="form-control">
			<?php foreach($funcionarios as $item): ?>
				<option value="<?php echo $item['id'];?>"><?php echo $item['nome'];?></option>
			<?php endforeach; ?>
		</select>
	</div>

	<br><br>

	Trabalho:<br/>
	<div class="form-group">
		<select name="trabalho" class="form-control">
			<?php foreach($postosTrabalho as $item): ?>
				<option value="<?php echo $item['id'];?>"><?php echo $item['nome'];?></option>
			<?php endforeach; ?>
		</select>
	</div>

	<br><br>

	Habilitado:<br/>

	<div class="form-check-inline">
		<label class="form-check-label">
			<input type="radio" name="habilitado" value="1" class="form-check-input" checked>Sim
		</label>
	</div>
	<br>

	<div class="form-check-inline">
		<label class="form-check-label">
			<input type="radio" name="habilitado" value="3" class="form-check-input">Não
		</label>
	</div>
  
	<br/><br/>

	Validade:<br/>
	<div class="form-group">
		<input type="date" name="validade" class="form-control" required/>
	</div>
	<br/><br/>

	<div class="form-group">
		<input type="submit" value="Adicionar" class="form-control btn btn-primary"/>
	</div>

</form>