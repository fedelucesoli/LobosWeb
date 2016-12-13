
<?php echo Form::open(array("class"=>"form-horizontal", 'style' => 'padding-left:15px;')); ?>
	
		<fieldset>
			<div class="form-group">
				<?php echo Form::label('Titulo', 'titulo', array('class'=>'control-label')); ?>
					<?php echo Form::input('titulo', Input::post('titulo', isset($post) ? $post->titulo : ''), array('class' => 'form-control', 'placeholder'=>'Titulo')); ?>
			</div>

			<div class="form-group">
				<?php echo Form::label('Descripcion', 'descripcion', array('class'=>'control-label')); ?>
				<?php echo Form::input('descripcion', Input::post('descripcion', isset($post) ? $post->descripcion : ''), array('class' => 'form-control', 'placeholder'=>'Descripcion')); ?>
	
			</div>
			<div class="form-group">
				<?php echo Form::label('Contenido', 'contenido', array('class'=>'control-label')); ?>
				<?php echo Form::textarea('contenido', Input::post('contenido', isset($post) ? $post->contenido : ''), array('class' => 'form-control', 'rows' => 8, 'placeholder'=>'Contenido')); ?>
	
			</div>
			<div class="form-group">
				<?php echo Form::label('Categoria', 'categoria', array('class'=>'control-label')); ?>
				<?php echo Form::input('categoria', Input::post('categoria', isset($post) ? $post->categoria : ''), array('class' => 'form-control', 'placeholder'=>'Categoria')); ?>
	
			</div>
			<hr>
			<div class="form-group">
				<label class='control-label'>&nbsp;</label>
				<a href="admin/noticias" class="btn btn-default">Cancelar</a>
				<?php echo Form::submit('submit', 'Guardar', array('class' => 'btn btn-primary')); ?>		</div>
		</fieldset>
	<?php echo Form::close(); ?>

