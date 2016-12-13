
<?php if ($users): ?>
	<div class="row">
	<?php foreach ($users as $user): ?>		<tr>
		<div class="col-sm-12 col-md-12col-lg-3 thumb-noticia">

		id : <?php echo $user->id;  ?> <br>
		username : <?php echo $user->username;  ?> <br>
		password : <?php echo $user->password;  ?> <br>
		group_id : <?php echo $user->group_id;  ?> <br>
		email : <?php echo $user->email;  ?> <br>
		last_login : <?php echo $user->last_login;  ?> <br>
		previous_login : <?php echo $user->previous_login;  ?> <br>
		login_hash : <?php echo $user->login_hash;  ?> <br>
		user_id : <?php echo $user->user_id;  ?> <br>
		created_at : <?php echo $user->created_at;  ?> <br>
		updated_at : <?php echo $user->updated_at;  ?> <br>

		</div>
	<?php endforeach; ?>
	</div>
<?php else: ?>
<p>No hay noticias para mostrar.</p>

<?php endif; ?>

