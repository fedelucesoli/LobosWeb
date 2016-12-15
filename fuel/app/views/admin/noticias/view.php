<div class="row">
	<div class="col-md-12">
		<?php echo Html::anchor('admin/noticias/edit/'.$noticia->id, 'Editar'); ?> |
		<?php echo Html::anchor('admin/noticias', 'Atras'); ?>
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