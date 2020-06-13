<div class="row">
		<div class="col-lg-6">
			<div class="card mb-4">
			<div class="card-body">
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
			</div>
		</div>
	</div>		
</div>	

<div class="row">
 	<div class="col-lg-3">
 		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-icon-split" name="btn_change_password">
				<span class="icon text-white-50"><i class="fas fa-save"></i></span>
	      		<span class="text">Save</span>
			</button>
		</div>
 	</div>
	<?php echo form_close(); ?>
	<div class="col-lg-3 text-right">
		<a href="<?= base_url('data_akun') ?>" class="btn btn-info btn-icon-split btn_back">
		  	<span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		  	<span class="text">Back</span>
		</a>	
	</div>
</div>



