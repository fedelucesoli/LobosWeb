<?php
class Controller_Admin_Noticias extends Controller_Admin
{

	public function action_index()
	{
		$data['posts'] = Model_Noticias::find('all');
		$data['titulo'] = "Noticias";
		$this->template->title = "Noticias";
		$this->template->content = View::forge('admin/noticias/index', $data);

	}

	public function action_view($id = null)
	{
		$data['posts'] = Model_Noticias::find($id);
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
					'slug' => Input::post('slug'),
					'descripcion' => Input::post('descripcion'),
					'contenido' => Input::post('contenido'),
					'categoria_id' => Input::post('categoria_id'),
				));

				if ($post and $post->save())
				{
					Session::set_flash('success', e('Added post #'.$post->id.'.'));

					Response::redirect('admin/post');
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
