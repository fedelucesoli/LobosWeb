<div class="container">
<div class="row col-md-8 col-md-offset-2">
	<div class="page-header">
				<h1><?php echo $noticia->titulo ?></h1>
			</div>
<div class="jumbotron noticia" style="background-image: url(<?php echo Uri::base().'imagenes/'.$noticia->imagen ?>)">

</div>
</div>
	<div class="row">
	
		<div class="col-md-8 col-md-offset-2">
			
			<p>
			<?php echo html_entity_decode($noticia->contenido); ?>
			</p>
			
			<hr>
			<div class="social-noticias">
				<ul class="share-buttons">
				  <li>
				  	<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.lobos.gov.ar&t=" title="Compartir en Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;">
				  		<span class="fa-stack ">
		                  <i class="fa fa-circle fa-stack-2x icon-background-facebook"></i>
		                  <i class="fa fa-facebook fa-stack-1x fa-white"></i>
		                </span>
				  	</a>
				  </li>
				  <li>
				  	<a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.lobos.gov.ar&text=:%20http%3A%2F%2Fwww.lobos.gov.ar&via=municipiolobos" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;">
				  		<span class="fa-stack ">
		                  <i class="fa fa-circle fa-stack-2x icon-background-twitter"></i>
		                  <i class="fa fa-twitter fa-stack-1x fa-white"></i>
		                </span>
				  	</a>
				  </li>
				  <li>
				  	<a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.lobos.gov.ar" target="_blank" title="Compartir en Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;">
				  		<span class="fa-stack ">
		                  <i class="fa fa-circle fa-stack-2x icon-background-google"></i>
		                  <i class="fa fa-google-plus fa-stack-1x fa-white"></i>
		                </span>
				  	</a>
				  </li>
				  <li>
				  	<a href="mailto:?subject=&body=:%20http%3A%2F%2Fwww.lobos.gov.ar" target="_blank" title="Enviar por Email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;">
				  		<span class="fa-stack">
		                  <i class="fa fa-circle fa-stack-2x icon-background-email"></i>
		                  <i class="fa fa-envelope fa-stack-1x fa-white"></i>
		                </span>
				  	</a>
				  </li>
				</ul>
            <!--    <h5>Compartir noticias</h5>
                <a href="https://www.facebook.com/municipiolobos" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x icon-background-facebook"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-white"></i>
                </span>
                </a>
                <a href="https://twitter.com/MunicipioLobos"  target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x icon-background-twitter"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-white"></i>
                </span>
                </a>
                <a href="https://www.youtube.com/channel/UCgRZ4vy7UbgPe0RD8japUcw"  target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x icon-background-youtube"></i>
                  <i class="fa fa-youtube fa-stack-1x fa-white"></i>
                </span>
                </a> -->
            </div>

		</div>
	</div>
	
</div>

