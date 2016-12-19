<div class="container">

<div class="row">
	<div class="page-header">
		<h3>Noticias de Lobos</h3>
	</div>
</div>

<div class="row">
<?php foreach ($noticias as $noticia): ?>
	<div class="col-sm-6 col-md-4 col-lg-3 thumb-noticia">
		<a href="<?php echo Uri::base().'web/noticia/'.$noticia->id; ?>">
		<img src="<?php echo Uri::base().'thumbs/'.$noticia->imagen ?>" alt="<?php echo $noticia->titulo ?>" class="img-responsive">
		<!-- <h5 class="text-muted small"><?php echo date('d F, Y', $noticia->created_at) ?></h5> -->

		<h4><?php echo $noticia->titulo ?></h4>
		</a>
	</div>


<?php endforeach ?>
	

	
</div>
	
</div>
