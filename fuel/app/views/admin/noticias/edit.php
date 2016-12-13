 <h2>Editar Noticia</h2>
<br>

<?php echo render('admin/noticias/_form'); ?>
<p>
	<?php echo Html::anchor('admin/noticias/view/'.$post->id, 'View'); ?> |
	<?php echo Html::anchor('admin/noticias', 'Back'); ?></p>
