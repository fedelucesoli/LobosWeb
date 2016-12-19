<?php
class Controller_Admin_Turismo_Servicios extends Controller_Admin
{

	public function action_index()
	{
		$data['turismo_servicios'] = Model_Turismo_Servicio::find('all');
		$this->template->title = "Turismo_servicios";
		$this->template->content = View::forge('admin/turismo/servicios/index', $data);

	}

	public function action_view($id = null)
	{
		$data['turismo_servicio'] = Model_Turismo_Servicio::find($id);

		$this->template->title = "Turismo_servicio";
		$this->template->content = View::forge('admin/turismo/servicios/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Turismo_Servicio::validate('create');

			if ($val->run())
			{
				$turismo_servicio = Model_Turismo_Servicio::forge(array(
					'categoria' => Input::post('categoria'),
					'nombre' => Input::post('nombre'),
					'direccion' => Input::post('direccion'),
					'telefono' => Input::post('telefono'),
					'email' => Input::post('email'),
					'web' => Input::post('web'),
					'imagenes' => Input::post('imagenes'),
					'texto' => Input::post('texto'),
					'is_draft' => Input::post('is_draft'),
					'order' => Input::post('order'),
				));

				if ($turismo_servicio and $turismo_servicio->save())
				{
					Session::set_flash('success', e('Added turismo_servicio #'.$turismo_servicio->id.'.'));

					Response::redirect('admin/turismo/servicios');
				}

				else
				{
					Session::set_flash('error', e('Could not save turismo_servicio.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Turismo_Servicios";
		$this->template->content = View::forge('admin/turismo/servicios/create');

	}

	public function action_edit($id = null)
	{
		$turismo_servicio = Model_Turismo_Servicio::find($id);
		$val = Model_Turismo_Servicio::validate('edit');

		if ($val->run())
		{
			$turismo_servicio->categoria = Input::post('categoria');
			$turismo_servicio->nombre = Input::post('nombre');
			$turismo_servicio->direccion = Input::post('direccion');
			$turismo_servicio->telefono = Input::post('telefono');
			$turismo_servicio->email = Input::post('email');
			$turismo_servicio->web = Input::post('web');
			$turismo_servicio->imagenes = Input::post('imagenes');
			$turismo_servicio->texto = Input::post('texto');
			$turismo_servicio->is_draft = Input::post('is_draft');
			$turismo_servicio->order = Input::post('order');

			if ($turismo_servicio->save())
			{
				Session::set_flash('success', e('Updated turismo_servicio #' . $id));

				Response::redirect('admin/turismo/servicios');
			}

			else
			{
				Session::set_flash('error', e('Could not update turismo_servicio #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$turismo_servicio->categoria = $val->validated('categoria');
				$turismo_servicio->nombre = $val->validated('nombre');
				$turismo_servicio->direccion = $val->validated('direccion');
				$turismo_servicio->telefono = $val->validated('telefono');
				$turismo_servicio->email = $val->validated('email');
				$turismo_servicio->web = $val->validated('web');
				$turismo_servicio->imagenes = $val->validated('imagenes');
				$turismo_servicio->texto = $val->validated('texto');
				$turismo_servicio->is_draft = $val->validated('is_draft');
				$turismo_servicio->order = $val->validated('order');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('turismo_servicio', $turismo_servicio, false);
		}

		$this->template->title = "Turismo_servicios";
		$this->template->content = View::forge('admin/turismo/servicios/edit');

	}

	public function action_delete($id = null)
	{
		if ($turismo_servicio = Model_Turismo_Servicio::find($id))
		{
			$turismo_servicio->delete();

			Session::set_flash('success', e('Deleted turismo_servicio #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete turismo_servicio #'.$id));
		}

		Response::redirect('admin/turismo/servicios');

	}

}
