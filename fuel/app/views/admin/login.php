<div class="row">
	<div class="col-md-4 col-md-offset-4" style="text-align: center">
        <?php echo Asset::img('logo-municipio.svg', array('alt' => 'Municipio de Lobos', 'height' => '100px')); ?>
		<hr>
		<?php echo Form::open(array()); ?>

			<?php if (isset($_GET['destination'])): ?>
				<?php echo Form::hidden('destination', $_GET['destination']); ?>
			<?php endif; ?>

			<?php if (isset($login_error)): ?>
				<div class="error"><?php echo $login_error; ?></div>
			<?php endif; ?>

			<div class="form-group <?php echo ! $val->error('email') ?: 'has-error' ?>">
				<label for="email">Usuario - Email</label>
				<?php echo Form::input('email', Input::post('email'), array('class' => 'form-control', 'placeholder' => 'Email or Username', 'autofocus')); ?>

				<?php if ($val->error('email')): ?>
					<span class="control-label"><?php echo $val->error('email')->get_message('Es necesario el email'); ?></span>
				<?php endif; ?>
			</div>

			<div class="form-group <?php echo ! $val->error('password') ?: 'has-error' ?>">
				<label for="password">Contraseña:</label>
				<?php echo Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Password')); ?>

				<?php if ($val->error('password')): ?>
					<span class="control-label"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></span>
				<?php endif; ?>
			</div>

			<div class="actions">
				<?php echo Form::submit(array('value'=>'Iniciar sesión', 'name'=>'submit', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
			</div>

		<?php echo Form::close(); ?>
	</div>
</div>
