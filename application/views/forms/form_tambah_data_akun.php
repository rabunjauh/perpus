<div class="container box">
	<div class="row">
		<div class="col-lg-6">
			<h3><?php echo $title; ?></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open(base_url('data_akun/tambah_data_akun')); ?>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Lengkap</th>
							<th>No Induk</th>
							<th>No Handphone</th>
							<th>Username</th>
							<th>Password</th>
							<th>Confirm Password</th>
							<th>Role</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tr_multiple">
							<td>1</td>
							<td><input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form_nama_lengkap" placeholder="Nama Lengkap" required></td>
							<td><input type="text" name="no_induk" id="no_induk" class="form-control form_no_induk" placeholder="No Induk" required></td>
							<td><input type="text" name="phone" id="phone" class="form-control form_phone" placeholder="Phone" required></td>
							<td><input type="text" name="username" id="username" class="form-control form_username" placeholder="Username" required></td>
							<td><input type="password" name="password" id="password" class="form-control form_password" placeholder="Password" required></td>
							<td><input type="password" name="confirm_password" id="confirm_password" class="form-control form_password" placeholder="Confirm Password" required></td>
							<!-- <td><input type="text" readonly name="created_date" class="form-control created_date" required placeholder="Created Date" data-date-format="yyyy-mm-dd"></td> -->
							<td>
								<select name="role" id="role" class="form-control select_role">
									<option value="">Role</option>
									<option value="1">Administrator</option>
									<option value="2">Supervisor</option>
									<option value="3">Data Entry</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				 <div class="row">
				 	<div class="col-lg-8">
				 		<div class="form-group">
							<button type="submit" name="tambah_akun" class="btn btn-primary">Save</button>
						</div>
				 	</div>
				</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-lg-4">
			
		</div>	
	</div>
</div>



