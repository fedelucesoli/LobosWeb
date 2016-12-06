<?php
return array(
	'_root_'  => 'web/index',  // The default route
	'_404_'   => 'web/404',    // The main 404 route

	'seccion/(:any)' => 'web/seccion/$1',

	// 'hello(/:name)?' => array('web/hello', 'name' => 'hello'),

);
