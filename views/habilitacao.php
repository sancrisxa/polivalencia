<a href="<?php echo BASE_URL; ?>home">[ HOME ]</a>
<a href="<?php echo BASE_URL; ?>habilitacao/add">[ ADICIONAR ]</a>
<br><br><br>

<table class="table table-striped" border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>CIDADE</th>
		<th>DATA NASCIMENTO</th>
		<th>POSTO TRABALHO</th>
		<th>VALIDADE</th>
		<th>HABILITADO</th>
	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['Nome Funcionarios']; ?></td>
			<td><?php echo $item['cidade']; ?></td>
			<td><?php echo date_format(date_create($item['data_nascimento']),"d/m/Y");?></td>
			<td><?php echo $item['Posto Trabalho']; ?></td>
			<td><?php echo date_format(date_create($item['validade']),"d/m/Y");?></td>
			<td><?php echo $item['habilitado'] == "1" ? "HABILITADO" : "DESABILITADO"; ?></td>
		</tr>
	<?php endforeach; ?>
</table>