<div class="container box">	
	<div class="row">
		<div class="col-lg-6">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>

	<?php if($this->session->userdata('role') === "1"): ?>
		<div class="row">
			<div class="col-lg-12">			
				<a href="<?php echo base_url('data_akun/tambah_data_akun'); ?>" class="btn btn-primary btn-lg">Tambah Data Akun</a>
			</div>
		</div>

		<div class="row">
		</div>
		<div class="row">
			<div class="col-lg-12">
				<?=form_open(base_url() . 'data_akun'); ?>
				<div class="form-inline">
					<div class="form-group">
						<label>Search by : </label>
						<select name="selCategory" class="form-control">
							<option value="0">Cari berdasarkan.. (Def: Semua)</option>
							<option value="id_akun">ID Akun</option>
							<option value="nama_lengkap">Nama Lengkap</option>
							<option value="no_induk">No Induk</option>
							<option value="phone">No Handphone</option>
							<option value="username">Username</option>
							<option value="role">Role</option>
							<option value="created_date">Created Date</option>
						</select>						
						<input type="text" class="form-control" name="txtSearch" placeholder="Search">
						<button type="submit" name="btnSearch" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>Search</button>
					</div>
				</div>
				<?=form_close(); ?>
			</div>
		</div>
	<?php endif; ?>

	
	<div class="row">
		<div class="col-lg-12">
		<table class="table table-bordered">
		<tr>
			<th>#</th>
			<th>ID Akun</th>
			<th>Nama Lengkap</th>
			<th>No Induk</th>
			<th>No Handphone</th>
			<th>Username</th>
			<th>Role</th>
			<th>Created Date</th>
			<th>Action</th>
		</tr>

		<?php if($akun){ ?>
			<?php
			$no = 1;
			foreach ($akun as $value): ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $value->id_akun; ?></td>
					<td><?php echo $value->nama_lengkap; ?></td>
					<td><?php echo $value->no_induk; ?></td>
					<td><?php echo $value->phone; ?></td>						
					<td><?php echo $value->username; ?></td>
					<td><?php echo $value->role; ?></td>
					<td><?php echo $value->created_date; ?></td>
					<td>
						<?php if($this->session->userdata('role') === '1'): ?>
							<a href="<?php echo base_url('data_akun/edit_data_akun/' . $value->id_akun); ?>">
								<button type="button" class="btn btn-default btn-xs"> Edit</button>
							</a>
							<a href="<?php echo base_url('data_akun/reset_password/' . $value->id_akun); ?>">
								<button type="button" class="btn btn-warning btn-xs"> Reset Password</button>
							</a>
							<a href="<?php echo base_url('data_akun/delete_akun/' . $value->id_akun); ?>">
								<button type="button" class="btn btn-danger btn-xs"> Delete</button>
							</a>

						<?php else: ?>	
							<a href="<?php echo base_url('data_akun/edit_data_akun/' . $value->id_akun); ?>">
								<button type="button" class="btn btn-info btn-xs"> Edit</button>
							</a>

							<a href="<?php echo base_url('data_akun/change_password/' . $value->id_akun); ?>" onclick="return confirm('Are you sure you want to delete this data?')">
								<button type="button" class="btn btn-primary btn-xs"> Change Password</button>
							</a>

						<?php endif; ?>	
					</td>	
				</tr>
			<?php
			$no++;
			endforeach ?>
		<?php }else{ ?>
			<tr><td colspan="7">No Data</td></tr>
		<?php } ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	
<!-- comment -->