<?php

namespace Fuel\Migrations;

class Create_turismo_servicios
{
	public function up()
	{
		\DBUtil::create_table('turismo_servicios', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'categoria' => array('constraint' => 255, 'type' => 'varchar'),
			'nombre' => array('constraint' => 255, 'type' => 'varchar'),
			'direccion' => array('constraint' => 255, 'type' => 'varchar'),
			'telefono' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'web' => array('constraint' => 255, 'type' => 'varchar'),
			'imagenes' => array('type' => 'text'),
			'texto' => array('type' => 'text'),
			'is_draft' => array('constraint' => 11, 'type' => 'int'),
			'order' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('turismo_servicios');
	}
}