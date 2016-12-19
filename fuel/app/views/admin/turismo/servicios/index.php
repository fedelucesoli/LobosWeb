<h2>Listado de Servicion - Turismo Lobos</h2>
<br>
<?php if ($turismo_servicios): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Categoria</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Email</th>
			<th>Web</th>
			<th>Imagenes</th>
			<th>Texto</th>
			<th>Is draft</th>
			<th>Order</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($turismo_servicios as $item): ?>		<tr>

			<td><?php echo $item->categoria; ?></td>
			<td><?php echo $item->nombre; ?></td>
			<td><?php echo $item->direccion; ?></td>
			<td><?php echo $item->telefono; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->web; ?></td>
			<td><?php echo $item->imagenes; ?></td>
			<td><?php echo $item->texto; ?></td>
			<td><?php echo $item->is_draft; ?></td>
			<td><?php echo $item->order; ?></td>
			<td>
				<?php echo Html::anchor('admin/turismo/servicios/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/turismo/servicios/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/turismo/servicios/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No existe ningun servicio</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/turismo/servicios/create', 'Agregar nuevo servicio', array('class' => 'btn btn-success')); ?>

</p>
