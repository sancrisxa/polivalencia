<h3>Adicionar</h3>

<?php if($error == 'exist'): ?>
	<div class="aviso">Campo obrigatório</div>
<?php endif; ?>

<form method="POST" action="<?php echo BASE_URL; ?>postoTrabalho/add_save">

	Nome:<br/>
	<div class="form-group">
		<select name="nome" class="form-control">
			<option value="Sao Paulo">São Paulo</option>
			<option value="Belo Horizonte">Belo Horizonte</option>
			<option value="Rio de Janeiro">Rio de Janeiro</option>
		</select>
	</div>
	<br/><br/>

	Setor:<br/>
	<div class="form-group">
		<select name="setor" class="form-control">
			<option value="Industria">Indústria</option>
			<option value="Servico">Serviço</option>
			<option value="Primaria">Primário</option>
		</select>
	</div>
	<br/><br/>

	Tipo:<br/>
	<div class="form-group">
		<input type="text" name="tipo" class="form-control" required/>
	</div>
	<br/><br/>

	<div class="form-group">
		<input type="submit" value="Adicionar" class="form-control btn btn-primary" />
	<div class="form-group">

</form>