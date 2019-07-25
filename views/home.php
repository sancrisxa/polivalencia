<a href="<?php echo BASE_URL; ?>home">[ HOME ]</a>
<a href="<?php echo BASE_URL; ?>funcionario/add">[ ADICIONAR ]</a>
<a href="<?php echo BASE_URL; ?>postoTrabalho">[ POSTO DE TRABALHO ]</a>
<a href="<?php echo BASE_URL; ?>habilitacao">[ HABILITAÇÃO ]</a>
<a href="<?php echo BASE_URL; ?>consulta">[ CONSULTA ]</a>
<br><br><br>
<table class="table table-striped" border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>DATA NASCIMENTO</th>
		<th>CIDADE</th>
		<th>TELEFONE</th>
	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['nome']; ?></td>
			<td><?php echo date_format(date_create($item['data_nascimento']),"d/m/Y");?></td>
			<td><?php echo $item['cidade']; ?></td>
			<td><?php echo $item['telefone']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>