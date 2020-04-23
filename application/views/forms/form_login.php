<div class="row">
	<div class="login-form form-signin">
		<h1 class="text-center login-title">Sign in</h1>
		<img class="profile-img" src="<?=base_url('assets/images/photo.jpg'); ?>">
		<?php echo form_open(base_url('login')); ?>
		<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
		<input type="password" name="password" class="form-control" placeholder="Password" required>
		<button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_login">Login</button>
		<?php echo form_close(); ?>
	</div>
</div>