<?php include("controlador/cminutosvalor.php"); ?>
<div class="container-fluid lol blanco">
     <div class="eti">Valores de compra y venta de minuto</div>
<?php $consultaminutosvalor = $minutosvalor->consultar_minutosvalor(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="12">Valores de minuto</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Costo del minuto</th>
				<th>Precio del minuto</th>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaminutosvalor);$i++): ?>
				<tr>
					<td><?= $consultaminutosvalor[$i]['idminutosvalor'] ?></td>
					<td><?= "$ ".number_format($consultaminutosvalor[$i]['costo_compra']) ?></td>
					<td><?= "$ ".number_format($consultaminutosvalor[$i]['valor_venta']) ?></td>
					<td><a href="home.php?pag=30&id=<?= $consultaminutosvalor[$i]['idminutosvalor'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>