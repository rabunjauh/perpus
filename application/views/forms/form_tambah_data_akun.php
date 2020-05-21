<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">	                
  		<div class="card-body">  
				<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
				<?php echo form_open(base_url('data_akun/tambah_data_akun')); ?>
					<div class="form-group">
					<label for="nama_anggota">Nama Lengkap :</label>
					<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form_nama_lengkap" placeholder="Nama Lengkap" required>
					</div>	

					<div class="form-group">
						<label for="nama_anggota">No Induk :</label><input type="text" name="no_induk" id="no_induk" class="form-control form_no_induk" placeholder="No Induk" required>
					</div>

					<div class="form-group">
						<label for="nama_anggota">No Handphone :</label><input type="text" name="phone" id="phone" class="form-control form_phone" placeholder="Phone" required>
					</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="card mb-4">	                
  		<div class="card-body">  
				<div class="form-group">
					<label for="nama_anggota">Username :</label>
					<input type="text" name="username" id="username" class="form-control form_username" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label for="nama_anggota">Password :</label>
					<input type="password" name="password" id="password" class="form-control form_password" placeholder="Password" required>
				</div>	
				<div class="form-group">
					<label for="nama_anggota">Confirm Password :</label>
					<input type="password" name="confirm_password" id="confirm_password" class="form-control form_password" placeholder="Confirm Password" required>
				</div>
				<!-- <td><input type="text" readonly name="created_date" class="form-control created_date" required placeholder="Created Date" data-date-format="yyyy-mm-dd"></td> -->
				<div class="form-group">
					<label for="nama_anggota">Role :</label>
					<select name="role" id="role" class="form-control select_role" required>
						<option value="">Role</option>
						<option value="1">Administrator</option>
						<option value="2">Supervisor</option>
						<option value="3">Data Entry</option>
					</select>
				</div>			
			</div>	
		</div>
	</div>	
</div>

<div class="row">
	<div class="col-lg-3">	
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-icon-split" name="tambah_akun">
        <span class="icon text-white-50"><i class="fas fa-save"></i></span>
        <span class="text">Save</span>
      </button>

      <button type="reset" class="btn btn-warning btn-icon-split" name="button_reset">
        <span class="icon text-white-50"><i class="fas fa-undo"></i></span>
        <span class="text">Reset</span>
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




