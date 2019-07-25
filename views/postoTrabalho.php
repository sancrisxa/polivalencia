<a href="<?php echo BASE_URL; ?>home">[ HOME ]</a>
<a href="<?php echo BASE_URL; ?>postoTrabalho/add">[ ADICIONAR ]</a>
<br><br><br>
<table class="table table-striped" border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>SETOR</th>
		<th>NOME</th>
		<th>TIPO</th>
	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['setor']; ?></td>
			<td><?php echo $item['nome']; ?></td>
			<td><?php echo $item['tipo']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>