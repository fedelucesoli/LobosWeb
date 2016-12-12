<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Federico Lucesoli">
    <link rel="icon" type="image/png" href="<?php echo Asset::get_file('favicon-32x32.png', 'img', 'common') ?>" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo Asset::get_file('favicon-16x16.png', 'img', 'common') ?>" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo Asset::get_file('favicon.ico', 'img', 'common') ?>" sizes="16x16" />

    <title>Municipio de Lobos</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet"> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="bower_components/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <?php echo Asset::css('dist/bootstrap.min.css') ?>
    <?php echo Asset::css('lobostrap/lobostrap.css') ?>
    <?php echo Asset::css('lobostrap/colores.css') ?>

    
 <script src="https://use.fontawesome.com/359ed0bee6.js"></script>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

  <?php 
   echo $header;

    echo $contenido;

    echo $footer;
   ?>