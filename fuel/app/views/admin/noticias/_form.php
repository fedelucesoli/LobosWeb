
		<?php echo Form::open(array("class"=>"form-horizontal", 'style' => 'padding-left:15px;', 'enctype'=>"multipart/form-data")); ?>
			
				<fieldset>
					<div class="form-group">
						<?php echo Form::label('Titulo', 'titulo', array('class'=>'control-label')); ?>
							<?php echo Form::input('titulo', Input::post('titulo', isset($post) ? $post->titulo : ''), array('class' => 'form-control')); ?>
					</div>
		
					<div class="form-group">
						<?php echo Form::label('Contenido', 'contenido', array('class'=>'control-label')); ?>
						<?php echo Form::textarea('contenido', Input::post('contenido', isset($post) ? $post->contenido : ''), array('class' => 'form-control', 'id' => 'summernote', 'rows' => 8)); ?>
			
					</div>
					<div class="form-group">
						<?php echo Form::label('Categoria', 'categoria', array('class'=>'control-label')); ?>
						<?php echo Form::input('categoria', Input::post('categoria', isset($post) ? $post->categoria : ''), array('class' => 'form-control')); ?>
			
					</div>
					<div class="form-group">
						<?php echo Form::label('Imagen destacada', 'imgs', array('class'=>'control-label')); ?><br>
						<?php echo Form::file('imgs[]', array('class' => 'col-md-4 form-control ', 'multiple')); ?>
						<!-- <p class="help-block">Tamaño máximo de imagen: 14 Pixeles</p> -->
					</div>
					<hr>
					<div class="form-group">
						<label class='control-label'>&nbsp;</label>
						<a href="admin/noticias" class="btn btn-default">Cancelar</a>
						<?php echo Form::submit('submit', 'Guardar', array('class' => 'btn btn-primary')); ?>		</div>
				</fieldset>
			<?php echo Form::close(); ?>
<script>


jQuery(document).ready(function($) {
	$('#summernote').summernote({
		lang: 'es-ES',
		height: 300,
		toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
  ]
	});
	
});

</script>