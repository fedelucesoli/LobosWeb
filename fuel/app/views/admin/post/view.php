<h2>Viewing #<?php echo $post->id; ?></h2>

<p>
	<strong>Titulo:</strong>
	<?php echo $post->titulo; ?></p>
<p>
	<strong>Slug:</strong>
	<?php echo $post->slug; ?></p>
<p>
	<strong>Descripcion:</strong>
	<?php echo $post->descripcion; ?></p>
<p>
	<strong>Contenido:</strong>
	<?php echo $post->contenido; ?></p>
<p>
	<strong>Categoria id:</strong>
	<?php echo $post->categoria_id; ?></p>
<p>
	<strong>Usuario id:</strong>
	<?php echo $post->usuario_id; ?></p>

<?php echo Html::anchor('admin/post/edit/'.$post->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/post', 'Back'); ?>