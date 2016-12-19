<?php
class Model_Turismo_Servicio extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'categoria',
		'nombre',
		'direccion',
		'telefono',
		'email',
		'web',
		'imagenes',
		'texto',
		'is_draft',
		'order',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('categoria', 'Categoria', 'required|max_length[255]');
		$val->add_field('nombre', 'Nombre', 'required|max_length[255]');
		$val->add_field('direccion', 'Direccion', 'required|max_length[255]');
		$val->add_field('telefono', 'Telefono', 'numeric|max_length[255]');
		$val->add_field('email', 'Email', 'valid_email|max_length[255]');
		$val->add_field('web', 'Web', 'max_length[255]');
		$val->add_field('texto', 'Texto');

		return $val;
	}

}
