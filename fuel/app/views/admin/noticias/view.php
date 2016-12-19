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
			<p><?php echo date('nS F, Y', $noticia->created_at) ?></p>
		</div>
		<?php echo html_entity_decode($noticia->contenido); ?>
	</div>
</div>
