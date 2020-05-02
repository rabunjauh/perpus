<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
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

				<div class="form-group">
					<label for="username">Username : <?php echo $edit_akun_values->username; ?></label>
					<input type="hidden" name="username" class="form-control" value="<?php echo $edit_akun_values->username; ?>" placeholder="Username">
					<input type="hidden" name="password" id="password" class="form-control form_password" value="<?php echo $edit_akun_values->password; ?>">
				</div>

				<div class="form-group">
					<label for="Role">Role :</label>
					<td>
								<select name="role" id="role" class="form-control select_role">
									<option value="<?php echo $edit_akun_values->role; ?>"><?php echo $edit_akun_values->role; ?></option>
									<?php foreach($roles as $role): ?>
									<option value="<?php echo $role->id_role; ?>"><?php echo $role->role; ?></option>
									<?php endforeach; ?>
								</select>
							</td>
				</div>

				<div class="form-group"> 	 	
					<button type="submit" class="btn btn-primary" name="button_edit_akun"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>