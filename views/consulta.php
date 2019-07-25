<a href="<?php echo BASE_URL; ?>home">[ HOME ]</a>
<br><br><br>
<table class="table table-striped" border="1" width="100%">
	<tr>
		<th>FUNCIONARIO</th>
		<th>TRABALHO</th>
		<th>HABILITADO</th>
		<th>VALIDADE</th>
	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
			<td><?php echo $item['funcionario']; ?></td>
			<td><?php echo $item['trabalho']; ?></td>
			<td><?php echo $item['habilitado'] == "1" ? "HABILITADO" : "DESABILITADO"; ?></td>
			<td><?php echo date_format(date_create($item['validade']),"d/m/Y");?></td>
		</tr>
	<?php endforeach; ?>
</table>