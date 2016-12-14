<?php
class Controller_Admin_Noticias extends Controller_Admin
{	
	public function before()
	{
		parent::before();

		// if (Request::active()->controller !== 'Controller_Admin' or ! in_array(Request::active()->action, array('login', 'logout')))
		// {
		// 	if (Auth::check())
		// 	{
		// 		$admin_group_id = Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? 6 : 100;
		// 		if ( ! Auth::member($admin_group_id))
		// 		{
		// 			Session::set_flash('error', e('You don\'t have access to the admin panel'));
		// 			Response::redirect('/');
		// 		}
		// 	}
		// 	else
		// 	{
		// 		Response::redirect('admin/login');
		// 	}
		// }
	}

	public function action_index()
	{
		$data['posts'] = Model_Noticias::find('all');
		$data['titulo'] = "Noticias";
		$this->template->content = View::forge('admin/noticias/index', $data);

	}

	public function action_view($id = null)
	{
		$data['noticia'] = Model_Noticias::find($id);
		$data['titulo'] = "Noticias";

		$this->template->title = "Noticias";

		$this->template->content = View::forge('admin/noticias/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Noticias::validate('create');

			if ($val->run())
			{
				$post = Model_Noticias::forge(array(
					'titulo' => Input::post('titulo'),
					'contenido' => Input::post('contenido'),
					'categoria' => Input::post('categoria'),
					'usuario_id' => 1
				));

				if ($post and $post->save())
				{
					Session::set_flash('success', e('Noticias #'.$post->id.'.'));

					Response::redirect('admin/noticias');
				}

				else
				{
					Session::set_flash('error', e('Could not save post.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Noticias";
		$this->template->content = View::forge('admin/noticias/create');

	}

	public function action_edit($id = null)
	{
		$post = Model_Noticias::find($id);
		$val = Model_Noticias::validate('edit');

		if ($val->run())
		{
			$post->titulo = Input::post('titulo');
			$post->slug = Input::post('slug');
			$post->descripcion = Input::post('descripcion');
			$post->contenido = Input::post('contenido');
			$post->categoria_id = Input::post('categoria_id');
			$post->usuario_id = Input::post('usuario_id');

			if ($post->save())
			{
				Session::set_flash('success', e('Updated post #' . $id));

				Response::redirect('admin/noticia');
			}

			else
			{
				Session::set_flash('error', e('Could not update post #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$post->titulo = $val->validated('titulo');
				$post->slug = $val->validated('slug');
				$post->descripcion = $val->validated('descripcion');
				$post->contenido = $val->validated('contenido');
				$post->categoria_id = $val->validated('categoria_id');
				$post->usuario_id = $val->validated('usuario_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('post', $post, false);
		}

		$this->template->title = "Noticias";
		$this->template->content = View::forge('admin/noticias/edit');

	}

	public function action_delete($id = null)
	{
		if ($post = Model_Noticias::find($id))
		{
			$post->delete();

			Session::set_flash('success', e('Deleted post #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete post #'.$id));
		}

		Response::redirect('admin/noticias');

	}

}
