<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Editar Noticia</h2>
		<HR>
		<?php echo render('admin/noticias/_form'); ?>
		<p>
			<?php echo Html::anchor('admin/noticias/view/'.$post->id, 'View'); ?> |
			<?php echo Html::anchor('admin/noticias', 'Back'); ?>
		</p>
	</div>
</div>