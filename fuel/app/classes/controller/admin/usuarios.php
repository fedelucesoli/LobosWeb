<?php
class Controller_Admin_Usuarios extends Controller_Admin
{

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = "Usuarios";
		$this->template->content = View::forge('admin/usuarios/index', $data);

	}

	public function action_view($id = null)
	{
		$data['post'] = Model_Post::find($id);

		$this->template->title = "Post";
		$this->template->content = View::forge('admin/post/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Post::validate('create');

			if ($val->run())
			{
				$post = Model_Post::forge(array(
					'titulo' => Input::post('titulo'),
					'slug' => Input::post('slug'),
					'descripcion' => Input::post('descripcion'),
					'contenido' => Input::post('contenido'),
					'categoria_id' => Input::post('categoria_id'),
					'usuario_id' => Input::post('usuario_id'),
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

		$this->template->title = "Posts";
		$this->template->content = View::forge('admin/post/create');

	}

	public function action_edit($id = null)
	{
		$post = Model_Post::find($id);
		$val = Model_Post::validate('edit');

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

				Response::redirect('admin/post');
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

		$this->template->title = "Posts";
		$this->template->content = View::forge('admin/post/edit');

	}

	public function action_delete($id = null)
	{
		if ($post = Model_Post::find($id))
		{
			$post->delete();

			Session::set_flash('success', e('Deleted post #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete post #'.$id));
		}

		Response::redirect('admin/post');

	}

}
