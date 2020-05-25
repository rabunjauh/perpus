<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">	                
	  		<div class="card-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open(base_url('data_akun/edit_data_akun/' . $edit_akun_values->id_akun)); ?>

				<div class="form-group">
					<label for="id_akun">Nama Lengkap :</label>
					<input type="hidden" name="id_akun" class="form-control" value="<?php echo $edit_akun_values->id_akun; ?>">
					<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $edit_akun_values->nama_lengkap; ?>" placeholder="Nama Lengkap" >
				</div>

				<div class="form-group">
					<label for="no_induk">No Induk :</label>
					<input type="text" name="no_induk" class="form-control" value="<?php echo $edit_akun_values->no_induk; ?>" placeholder="No Induk">
				</div>

				<div class="form-group">
					<label for="phone">No Handphone :</label>
					<input type="text" name="phone" class="form-control" value="<?php echo $edit_akun_values->phone; ?>" placeholder="No Handphone">
				</div>	
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="card mb-4">	                
  		<div class="card-body">
				<div class="form-group">
						<label for="username">Username : <?php echo $edit_akun_values->username; ?></label>
						<input type="text" name="username" class="form-control" value="<?php echo $edit_akun_values->username; ?>" disabled>
						<input type="hidden" name="username" class="form-control" value="<?php echo $edit_akun_values->username; ?>" placeholder="Username">
				</div>

				<div class="form-group">
					<label for="Role">Role :</label>
					<td>
						<select name="role" id="role" class="form-control select_role">
							<option value="<?php echo $edit_akun_values->id_role; ?>"><?php echo $edit_akun_values->role; ?></option>
							<?php foreach($roles as $role): ?>
							<option value="<?php echo $role->id_role; ?>"><?php echo $role->role; ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-icon-split" name="button_edit_akun">
      <span class="icon text-white-50"><i class="fas fa-save"></i></span>
      <span class="text">Save</span>
    </button>
	</div>		
</div>	
<?php echo form_close(); ?>
	<div class="col-lg-9 text-right">
		<a href="<?= base_url('data_akun') ?>" class="btn btn-info btn-icon-split">
	  <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
	  <span class="text">Back</span>
	</a>	
	</div>		
</div>