<body class="bg-gradient-primary">

  <div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

	  <div class="col-lg-5">

		<div class="card o-hidden border-0 shadow-lg my-5">
		  <div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
			  <div class="col-lg">
				<div class="p-5">
				  <div class="text-center">
					<h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
				  </div>
					<?php 
					  $attributes = array('class' => 'user');
					  echo form_open(base_url('login'), $attributes);
					?>
					<div class="form-group">
					  <input type="text" name="username" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Username..." autofocus>
					  <?php echo form_error('username', '<small class="text-danger">', '</small>') ?>
					</div>
					<div class="form-group">
					  <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
						<?php echo form_error('password', '<small class="text-danger">', '</small>') ?>
					</div>
					<button class="btn btn-primary btn-user btn-block" type="submit" name="btn_login">Login</button>
					<!-- <hr> -->
				  <?php echo form_close(); ?>
				  <!-- <hr> -->
				  <!-- <div class="text-center">
					<a class="small" href="forgot-password.html">Forgot Password?</a>
				  </div>
				  <div class="text-center">
					<a class="small" href="register.html">Create an Account!</a>
				  </div> -->
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>


	</div>

  </div>

</body>
