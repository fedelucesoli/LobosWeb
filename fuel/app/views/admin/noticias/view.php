<div class="row">
	<div class="col-md-12">
		<?php echo Html::anchor('admin/noticias/edit/'.$noticia->id, 'Edit'); ?> |
		<?php echo Html::anchor('admin/noticias', 'Back'); ?>
	</div>
</div>
<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="page-header">
				<h1><?php echo $noticia->titulo; ?></h1>
				<p class="text-small"><?php echo $noticia->categoria; ?></p>
			</div>
			<?php echo html_entity_decode($noticia->contenido); ?>
		</div>
	</div>


<h2>Viewing #<?php echo $noticia->id; ?></h2>

<p>
	<strong>Titulo:</strong>
	<?php echo $noticia->titulo; ?></p>
<p>
	<strong>Slug:</strong>
	<?php echo $noticia->slug; ?></p>
<p>
	<strong>Descripcion:</strong>
	<?php echo $noticia->descripcion; ?></p>
<p>
	<strong>Contenido:</strong>
	<?php echo html_entity_decode($noticia->contenido); ?>
</p>

<p>
	<strong>Usuario id:</strong>
	<?php echo $noticia->usuario_id; ?></p>

