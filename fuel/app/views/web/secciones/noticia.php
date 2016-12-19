<div class="container">
<div class="jumbotron noticia" style="background-image: url(<?php echo Uri::base().'imagenes/'.$noticia->imagen ?>)">

</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="page-header">
				<h1><?php echo $noticia->titulo ?></h1>
			</div>
			<p>
			<?php echo html_entity_decode($noticia->contenido); ?>
			</p>
		</div>
	</div>
	
</div>

