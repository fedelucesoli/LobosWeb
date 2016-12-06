<h2>Listing Posts</h2>
<br>
<?php if ($posts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Slug</th>
			<th>Descripcion</th>
			<th>Contenido</th>
			<th>Categoria id</th>
			<th>Usuario id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $item): ?>		<tr>

			<td><?php echo $item->titulo; ?></td>
			<td><?php echo $item->slug; ?></td>
			<td><?php echo $item->descripcion; ?></td>
			<td><?php echo $item->contenido; ?></td>
			<td><?php echo $item->categoria_id; ?></td>
			<td><?php echo $item->usuario_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/post/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/post/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/post/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/post/create', 'Add new Post', array('class' => 'btn btn-success')); ?>

</p>
