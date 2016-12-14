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
		
		$data = array('slider' => Response::forge(View::forge('web/layouts/slider')));

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
        	$this->template->footer = Response::forge(View::forge('web/includes/footer'));

        	$this->template->contenido = View::forge('web/secciones/'.$seccion , $data);

		}else{
			
			Response::redirect(Uri::base());
		}
		
	
        
	}

	public function action_noticias(){

            $data['noticia'] = Model_Noticias::find('all', array(
            'where' => array(
                array('slug', '=', $slug),
                ),
            ));
            $data['noticiasrealcionadas'] = Model_Noticias::find('all', array(
            	'where' => array(
            		array('categoria', '=', $data['noticia']->categoria)
            		),
            	'limit' => '4'
            	));


        $this->template->header = Response::forge(View::forge('web/includes/header'));
        $this->template->footer = Response::forge(View::forge('web/includes/footer'));
        $this->template->contenido = View::forge('web/secciones/noticias' , $data);


	}

	public function action_noticia($slug = null){
		if (empty($slug)) {
			Response::redirect('/web/noticias');
		}else{
            $data['noticia'] = Model_Noticias::find('all', array(
            'where' => array(
                array('slug', '=', $slug),
                ),
            ));
            $data['noticiasrealcionadas'] = Model_Noticias::find('all', array(
            	'where' => array(
            		array('categoria', '=', $data['noticia']->categoria)
            		),
            	'limit' => '4'
            	));
        }

		$this->template->header = Response::forge(View::forge('web/includes/header'));
        $this->template->footer = Response::forge(View::forge('web/includes/footer'));
        $this->template->contenido = View::forge('web/secciones/noticia' , $data);
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
