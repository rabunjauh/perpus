<div class="container box">	
	<div class="row">
		<div class="col-lg-6">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">			
			<a href="<?php echo base_url('data_anggota/tambah_data_anggota'); ?>" class="btn btn-primary btn-lg">Tambah Data Anggota</a>
		</div>
	</div>	
	<div class="row">
		<div class="col-lg-12">
		<?=form_open(base_url() . 'data_anggota/'); ?>
		<div class="form-inline">
			<div class="form-group">
				<label>Search by : </label>
				<select name="selCategory" class="form-control">
					<option value="0">Cari berdasarkan.. (Def: Semua)</option>
					<option value="id_anggota">ID Anggota</option>
					<option value="nama_anggota">Nama Anggota</option>
					<option value="no_induk">No Induk</option>
					<option value="jenis_kelamin">Jenis Kelamin</option>
					<option value="kelas">Kelas</option>
					<option value="jurusan">Jurusan</option>
					<option value="no_telepon">No Handphone</option>
					<option value="email">Email</option>
					<option value="tanggal_daftar">Tanggal Daftar</option>
					<option value="tanggal_input">Tanggal Input</option>
				</select>						
				<input type="text" class="form-control" name="txtSearch" placeholder="Search">
				<button type="submit" name="btnSearch" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>Search</button>
			</div>
		</div>
		<?=form_close(); ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-12">
		<table class="table table-bordered">
		<tr>
			<th>#</th>
			<th>ID</th>
			<th>Nama Anggota</th>
			<th>No Induk</th>
			<th>Jenis Kelamin</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>No Telepon</th>
			<th>Email</th>
			<th>Tanggal Daftar</th>
			<th>Tanggal Input</th>
			<th>Foto</th>
			<th>Action</th>
		</tr>

		<?php
		$no = 1;
		foreach ($anggota as $value): ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $value->id_anggota; ?></td>
			<td><?php echo $value->nama_anggota; ?></td>
			<td><?php echo $value->no_induk; ?></td>
			<td><?php echo $value->jenis_kelamin; ?></td>
			<td><?php echo $value->kelas; ?></td>
			<td><?php echo $value->jurusan; ?></td>
			<td><?php echo $value->no_telepon; ?></td>
			<td><?php echo $value->email; ?></td>			
			<td><?php echo $value->tanggal_daftar; ?></td>			
			<td><?php echo $value->tanggal_input; ?></td>			
			<td><img src="<?php echo base_url('assets/images/' . $value->photo .'.jpg'); ?>" alt="photo"></td>			
			<td>
				<a href="<?php echo base_url('data_anggota/edit_data_anggota/' . $value->id_anggota); ?>">
					<button type="button" class="btn btn-info btn-xs">
						 Edit
					</button>
				</a>
				<a href="<?php echo base_url('data_anggota/delete_anggota/' . $value->id_anggota); ?>">
					<button type="button" class="btn btn-danger btn-xs">
						 Delete
					</button>
				</a>
			</td>	
		</tr>
		<?php $no++; ?>
		<?php endforeach ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	