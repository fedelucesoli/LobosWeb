<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The web Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Web extends Controller_Template
{
	public $template = 'web/includes/template';

	
	public function action_index(){
		
		$data = array();
        $this->template->header = Response::forge(View::forge('web/includes/header'));
        $this->template->footer = Response::forge(View::forge('web/includes/footer'));

        $this->template->contenido = View::forge('web/secciones/index', $data);
        
		// return Response::forge(View::forge('web/index'));
	}

	public function action_seccion($seccion = null){

		$existe = File::exists(APPPATH.'/views/web/secciones/'.$seccion.'.php');

		if(isset($seccion) && $existe){
			$data = array();
       		$this->template->header = Response::forge(View::forge('web/includes/header'));
        	$this->template->telefonos = Response::forge(View::forge('web/layouts/telefonos'));
        	$this->template->footer = Response::forge(View::forge('web/includes/footer', $this));

        	$this->template->content = View::forge('web/secciones/'.$seccion , $data);

		}else{
			
			Response::redirect(Uri::base());
		}
		
		
        
	}

	
	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	// public function action_404()
	// {
	// 	return Response::forge(Presenter::forge('welcome/404'), 404);
	// }
}
