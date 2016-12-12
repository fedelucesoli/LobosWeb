<div class="row">
	<h1><?php echo $titulo; ?></h1>
	<?php echo Html::anchor('admin/post/create', 'Nueva noticia', array('class' => 'btn btn-sm btn-success float-right')); ?>
</div>
<hr>

<?php if ($posts): ?>
	<div class="row">
	<?php foreach ($posts as $item): ?>		<tr>
		<div class="col-sm-6 col-md-4 col-lg-3 thumb-noticia">
			<img src="assets/img/noticias/1.jpg" alt="" class="img-responsive">
			<h5 class="text-muted small"></h5>
			<h4>TITULO</h4>
		</div>
	<?php endforeach; ?>
	</div>
<?php else: ?>
<p>No hay noticias para mostrar.</p>

<?php endif; ?>

