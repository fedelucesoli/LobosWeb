<?php
class Model_Post extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'titulo',
		'slug',
		'descripcion',
		'contenido',
		'categoria_id',
		'usuario_id',
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
		$val->add_field('titulo', 'Titulo', 'required|max_length[255]');
		$val->add_field('slug', 'Slug', 'required|max_length[255]');
		$val->add_field('descripcion', 'Descripcion', 'required|max_length[200]');
		$val->add_field('contenido', 'Contenido', 'required');
		$val->add_field('categoria_id', 'Categoria Id', 'required|valid_string[numeric]');
		$val->add_field('usuario_id', 'Usuario Id', 'required|valid_string[numeric]');

		return $val;
	}

}
