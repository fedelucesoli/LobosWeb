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
class Controller_Turismo extends Controller_Template
{
	public $template = 'turismo/includes/template';

	
	public function action_index(){
		
		$data = array('slider' => Response::forge(View::forge('turismo/layouts/slider')));

		$data['noticias'] = Model_Noticias::find('all', array(
			'limit' => 4,
			'order' => array(
				'created_at' => 'desc')
			));
        View::set_global('noticias', $data['noticias'], false);

		$data['seccionnoticias'] = Response::forge(View::forge('turismo/layouts/noticias', $data));

        $this->template->header = Response::forge(View::forge('turismo/includes/header'));
        $this->template->footer = Response::forge(View::forge('turismo/includes/footer'));

        $this->template->contenido = View::forge('turismo/secciones/index', $data);
        
		// return Response::forge(View::forge('turismo/index'));
	}

	public function action_seccion($seccion = null){

		$existe = File::exists(APPPATH.'/views/web/secciones/'.$seccion.'.php');

		if(isset($seccion) && $existe){
			$data = array();
       		$this->template->header = Response::forge(View::forge('web/includes/header'));
        	$this->template->telefonos = Response::forge(View::forge('web/layouts/telefonos'));
        	$this->template->footer = Response::forge(View::forge('web/includes/footer'));

        	$this->template->contenido = View::forge('web/secciones/'.$seccion , $data);

		}else{
			
			Response::redirect(Uri::base());
		}
        
	}

	public function action_noticias(){

        $data['noticias'] = Model_Noticias::find('all');
        
        View::set_global('noticias', $data['noticias'], false);


        $this->template->header = Response::forge(View::forge('web/includes/header'));
        $this->template->footer = Response::forge(View::forge('web/includes/footer'));
        $this->template->contenido = View::forge('web/secciones/noticias' , $data);


	}

	public function action_noticia($id = null){
		if (is_null($id)) {
			Response::redirect('/web/noticias');
		}else{
            $data['noticia'] = Model_Noticias::find($id);
       }
        View::set_global('noticia', $data['noticia'], false);

		$this->template->header = Response::forge(View::forge('web/includes/header'));
        $this->template->footer = Response::forge(View::forge('web/includes/footer'));
        $this->template->contenido = View::forge('web/layouts/articulo' , $data);
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
