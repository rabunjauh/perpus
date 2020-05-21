<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open(base_url('data_akun/change_password/' . $edit_akun_values->id_akun)); ?>
			<div class="form-group">
				<label for="username">Username :</label>
				<input type="text" name="username" id="username" class="form-control" value="<?php echo $edit_akun_values->username ?>" disabled>
				<input type="hidden" name="verify_old_password" id="verify_old_password" class="form-control" value="<?php echo $edit_akun_values->password; ?>">
			</div>

			<div class="form-group">
				<label for="old_password">Old Password :</label>
				<input type="password" name="old_password" id="old_password" class="form-control" placeholder="Old Password" required>
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
						<button type="submit" name="btn_change_password" class="btn btn-primary">Save</button>
					</div>
			 	</div>
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-lg-4">
			
		</div>	
	</div>
</div>



