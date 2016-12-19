<h2>Viewing #<?php echo $turismo_servicio->id; ?></h2>

<p>
	<strong>Categoria:</strong>
	<?php echo $turismo_servicio->categoria; ?></p>
<p>
	<strong>Nombre:</strong>
	<?php echo $turismo_servicio->nombre; ?></p>
<p>
	<strong>Direccion:</strong>
	<?php echo $turismo_servicio->direccion; ?></p>
<p>
	<strong>Telefono:</strong>
	<?php echo $turismo_servicio->telefono; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $turismo_servicio->email; ?></p>
<p>
	<strong>Web:</strong>
	<?php echo $turismo_servicio->web; ?></p>
<p>
	<strong>Imagenes:</strong>
	<?php echo $turismo_servicio->imagenes; ?></p>
<p>
	<strong>Texto:</strong>
	<?php echo $turismo_servicio->texto; ?></p>
<p>
	<strong>Is draft:</strong>
	<?php echo $turismo_servicio->is_draft; ?></p>
<p>
	<strong>Order:</strong>
	<?php echo $turismo_servicio->order; ?></p>

<?php echo Html::anchor('admin/turismo/servicios/edit/'.$turismo_servicio->id, 'Editar'); ?> |
<?php echo Html::anchor('admin/turismo/servicios', 'Atras'); ?>