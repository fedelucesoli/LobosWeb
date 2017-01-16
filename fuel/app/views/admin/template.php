<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="<?php echo Asset::get_file('favicon-32x32.png', 'img', 'common') ?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo Asset::get_file('favicon-16x16.png', 'img', 'common') ?>" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo Asset::get_file('favicon.ico', 'img', 'common') ?>" sizes="16x16" />


    <title>LobosWeb</title>
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="bower_components/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <?php echo Asset::css('dist/bootstrap.css') ?>

    <?php echo Asset::css('lobostrap/lobostrap.css') ?>
    <?php echo Asset::css('lobostrap/colores.css') ?>
    <?php echo Asset::css('dist/summernote.css') ?>

    <style>body{margin-top: 100px;}</style>
    <script src="https://use.fontawesome.com/359ed0bee6.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<?php echo Asset::js(array('bootstrap.min.js', 'summernote.min.js',	'summernote-es-ES.js')) ?>

    <script type="text/javascript">
    	$('.dropdown').dropdown();
    </script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

	<?php if ($current_user): ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			 <div class="navbar-header">
		            <button type="button" class="navbar-toggle"
		            data-toggle="collapse"
		            data-target=".navbar-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand hidden-sm" href="<?php echo Uri::base() ?>" style= "padding-top:0px">
		           	 <?php echo Asset::img('logo-municipio-CMS.svg', array('alt'=>'Municipio de Lobos')) ?>
		            </a>
		            <a class="navbar-brand hidden-md" href="<?php echo Uri::base() ?>" style= "padding-top:0px">
		           	 Municipio de Lobos
		            </a>
		        </div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="<?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
						<?php echo Html::anchor('admin', 'Dashboard') ?>
					</li>

					<?php
						$files = new GlobIterator(APPPATH.'classes/controller/admin/*.php');
						foreach($files as $file)
						{
							$section_segment = $file->getBasename('.php');
							$section_title = Inflector::humanize($section_segment);
							?>
							<li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
								<?php echo Html::anchor('admin/'.$section_segment, $section_title) ?>
							</li>
							<?php
						}
					?>
					<li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
						<?php echo Html::anchor('admin/turismo/servicios','Turismo') ?>
					</li>
				</ul>
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown  dropdown-menu-left">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $current_user->username ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?php echo Html::anchor('admin/logout', 'Logout') ?></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				
<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
			<div class="col-md-12">
<?php echo $content; ?>
			</div>
		</div>
		<hr/>

	</div>
</body>
</html>
