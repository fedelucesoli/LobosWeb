

<header id="navbar" role="banner" class="navbar container navbar-default" >
  <div class="navbar-header">
    <a class="logo navbar-btn pull-left" href="<?php echo URI::base(); ?>" title="Inicio">
      <img src="http://lobos.gob.ar/sites/default/files/logo_1.jpg" alt="Inicio" />
    </a>
    
    
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse">
    <nav role="navigation">
      <ul class="menu nav navbar-nav">
        <li class="first leaf active"><a href="<?php echo URI::base(); ?>" title="" class="active">Inicio</a></li>
        <li class="leaf"><a href="<?php echo URI::base().'seccion/municipio' ?>">Municipio</a></li>
        <li class="leaf"><a href="<?php echo URI::base().'seccion/HCD' ?>">HCD</a></li>
        <li class="leaf"><a href="<?php echo URI::base().'seccion/novedades' ?>" title="">Novedades</a></li>
        <li class="last leaf"><a href="<?php echo URI::base().'seccion/contacto' ?>">Contacto</a></li>
      </ul>
    <div class="region region-navigation">
      <!--     <section id="block-search-form" class="block block-search clearfix">
        
        <form class="form-search content-search" action="/" method="post" id="search-block-form" accept-charset="UTF-8"><div><div>
          <h2 class="element-invisible">Formulario de búsqueda</h2>
          <div class="input-group"><input title="Escriba lo que quiere buscar." placeholder="Buscar" class="form-control form-text" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" /><span class="input-group-btn"><button type="submit" class="btn btn-primary"><span class="icon glyphicon glyphicon-search" aria-hidden="true"></span></button></span></div><div class="form-actions form-wrapper form-group" id="edit-actions"><button class="element-invisible btn btn-primary form-submit" type="submit" id="edit-submit" name="op" value="Buscar">Buscar</button>
          </div><input type="hidden" name="form_build_id" value="form-UUaRbImdh7f4IQqcU307E-A-TIJgaRaMc55WRQcJKTw" />
          <input type="hidden" name="form_id" value="search_block_form" />
        </div>
      </div></form>
    </section>
    -->
    <section id="block-widgets-s-base" class="block block-widgets clearfix">
      
      <a href="https://www.facebook.com/municipiolobos" title="Municipio Lobos en Facebook" target="_blank">
      <?php echo Asset::img('themeoriginal/facebook.png', array('id' => 'fede')) ?>

      </a>
      <a href="http://twitter.com/@MunicipioLobos" title="Visit @MunicipioLobos on Twitter" target="_blank">
      <?php echo Asset::img('themeoriginal/twitter.png'); ?>
      </a>

      <a href="https://www.youtube.com/channel/UCgRZ4vy7UbgPe0RD8japUcw)" title="Visit Municipio Lobos on YouTube" target="_blank">
      <?php echo Asset::img('themeoriginal/youtube.png'); ?>
      </a>
    </section>
  </div>
</nav>
</div>
<!--   </div> -->
<!--   </div> -->
</header>