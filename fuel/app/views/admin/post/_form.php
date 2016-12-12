
<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	
		<fieldset>
			<div class="form-group">
				<?php echo Form::label('Titulo', 'titulo', array('class'=>'control-label')); ?>
	
					<?php echo Form::input('titulo', Input::post('titulo', isset($post) ? $post->titulo : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Titulo')); ?>
	
			</div>
	
			<div class="form-group">
				<?php echo Form::label('Descripcion', 'descripcion', array('class'=>'control-label')); ?>
	
					<?php echo Form::input('descripcion', Input::post('descripcion', isset($post) ? $post->descripcion : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Descripcion')); ?>
	
			</div>
			<div class="form-group">
				<?php echo Form::label('Contenido', 'contenido', array('class'=>'control-label')); ?>
				<?php echo Form::textarea('contenido', Input::post('contenido', isset($post) ? $post->contenido : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Contenido')); ?>
	
			</div>
			<div class="form-group">
				<?php echo Form::label('Categoria', 'categoria', array('class'=>'control-label')); ?>
	
				<?php echo Form::input('categoria', Input::post('categoria', isset($post) ? $post->categoria : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Categoria')); ?>
	
			</div>
	
			<div class="form-group">
				<label class='control-label'>&nbsp;</label>
				<?php echo Form::submit('submit', 'Guardar', array('class' => 'btn btn-primary')); ?>		</div>
		</fieldset>
	<?php echo Form::close(); ?>

