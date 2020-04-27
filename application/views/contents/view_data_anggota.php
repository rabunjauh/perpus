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
		<?=form_open(base_url() . 'cemployee/search'); ?>
		<div class="form-inline">
			<div class="form-group">
				<select name="selCategory" class="form-control">
					<option value="0">Search By</option>
					<option value="idemployee">Employee ID</option>
					<option value="employeeno">Employee No</option>
					<option value="employeename">Employee Name</option>
					<option value="deptdesc">Department</option>
					<option value="positiondesc">Position</option>
					<option value="code">Company Code</option>
					<option value="extension">Extension</option>
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
			<th>No</th>
			<th>ID</th>
			<th>Nama Anggota</th>
			<th>No Induk</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>No Telepon</th>
			<th>Email</th>
			<th>Tanggal Daftar</th>
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
			<td><?php echo $value->kelas; ?></td>
			<td><?php echo $value->jurusan; ?></td>
			<td><?php echo $value->no_telepon; ?></td>
			<td><?php echo $value->email; ?></td>			
			<td><?php echo $value->tanggal_daftar; ?></td>			
			<td><img class="card" src="<?php echo base_url('assets/images/' . $value->photo .'.jpg'); ?>" alt="photo"></td>			
			<td><a href=""><span class="glyphicon glyphicon-edit"></span> Edit</a></td>	
		</tr>
		<?php $no++; ?>
		<?php endforeach ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	