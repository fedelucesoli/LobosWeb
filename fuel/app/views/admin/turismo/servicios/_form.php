<?php echo Form::open(array("class"=>"form-horizontal", 'style' => 'padding-left:15px;', 'enctype'=>"multipart/form-data")); ?>

	<fieldset>

		<div class="form-group">
			<?php echo Form::label('Categoria', 'categoria', array('class'=>'control-label')); ?>
			<?php echo Form::input('categoria', Input::post('categoria', isset($turismo_servicio) ? $turismo_servicio->categoria : ''), array('class' => 'col-md-4 form-control input-sm', 'placeholder'=>'Categoria')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Nombre', 'nombre', array('class'=>'control-label')); ?>
			<?php echo Form::input('nombre', Input::post('nombre', isset($turismo_servicio) ? $turismo_servicio->nombre : ''), array('class' => 'col-md-4 form-control input-sm', 'placeholder'=>'Nombre')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Direccion', 'direccion', array('class'=>'control-label')); ?>
			<?php echo Form::input('direccion', Input::post('direccion', isset($turismo_servicio) ? $turismo_servicio->direccion : ''), array('class' => 'col-md-4 form-control input-sm', 'placeholder'=>'Direccion')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Telefono', 'telefono', array('class'=>'control-label')); ?>
			<?php echo Form::input('telefono', Input::post('telefono', isset($turismo_servicio) ? $turismo_servicio->telefono : ''), array('class' => 'col-md-4 form-control input-sm', 'placeholder'=>'Telefono')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>
			<?php echo Form::input('email', Input::post('email', isset($turismo_servicio) ? $turismo_servicio->email : ''), array('class' => 'col-md-4 form-control input-sm', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Web', 'web', array('class'=>'control-label')); ?>
			<?php echo Form::input('web', Input::post('web', isset($turismo_servicio) ? $turismo_servicio->web : ''), array('class' => 'col-md-4 form-control input-sm', 'placeholder'=>'Web')); ?>

		</div>
	
		<div class="form-group">
			<?php echo Form::label('Texto', 'texto', array('class'=>'control-label')); ?>
			<?php echo Form::textarea('texto', Input::post('texto', isset($turismo_servicio) ? $turismo_servicio->texto : ''), array('class' => 'col-md-8 form-control input-sm', 'rows' => 8, 'placeholder'=>'Texto')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Imagenes', 'imagenes', array('class'=>'control-label')); ?><br>
			<?php echo Form::file('imagenes[]', array('class' => 'col-md-4 form-control input-sm ', 'multiple')); ?>
		</div>

		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Guardar', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>