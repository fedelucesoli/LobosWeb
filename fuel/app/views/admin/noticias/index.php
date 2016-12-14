<div class="row">
	<div class="col-md-6">
		<h1 class="pull-left"><?php echo $titulo; ?></h1>
	</div>
	<div class="col-md-6">
		<?php echo Html::anchor('admin/noticias/create', 'Nueva noticia', array('class' => 'btn btn-sm btn-success pull-right')); ?>
	</div>
</div>
<hr>

<?php if ($posts): ?>
	<div class="row">
	<?php foreach ($posts as $item): ?>		<tr>
		<div class="col-sm-6 col-md-4 col-lg-3 thumb-noticia">
			<img src="assets/img/noticias/1.jpg" alt="" class="img-responsive">
			<h5 class="text-muted small"></h5>
			<a href="<?php echo Uri::base().'admin/noticias/view/'.$item->id ?>"><h4><?php echo $item->titulo ?></h4></a>
		</div>
	<?php endforeach; ?>
	</div>
<?php else: ?>
<p>No hay noticias para mostrar.</p>

<?php endif; ?>

