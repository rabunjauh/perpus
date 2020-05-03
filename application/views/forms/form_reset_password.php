<!-- Header -->
	<?php echo $header; ?>
	<!-- /Header -->
<div id="note" class="text-center">
	<?php 
		if ( $this->session->flashdata('message_verify_password') ) {
			echo $this->session->flashdata('message_verify_password');
		} 
		else{
			echo '';
		}
	?>      
</div>

<div class="container box">
	<div class="row">
		<div class="col-lg-6">
			<h3><?php echo $title; ?></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open(base_url('data_akun/reset_password/' . $edit_akun_values->id_akun)); ?>
			<div class="form-group">
				<label for="username">Username :</label>
				<input type="text" name="old_password" id="old_password" class="form-control" value="<?php echo $edit_akun_values->username ?>" disabled>
			</div>

			<div class="form-group">
				<label for="new_password">New Password :</label>
				<input type="password" name="new_password" id="new_password" class="form-control" placeholder="New Password" required>
			</div>

			<div class="form-group">
				<label for="confirm_new_password">Confirm New Password :</label>
				<input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control" placeholder="Confirm New Password" required>
			</div>
				
			 <div class="row">
			 	<div class="col-lg-12">
			 		<div class="form-group">
						<button type="submit" name="btn_reset_password" class="btn btn-primary">Save</button>
					</div>
			 	</div>
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-lg-4">
			
		</div>	
	</div>
</div>



