<div class="container box">	
	<div class="row">
		<div class="col-lg-6">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">			
			<a href="<?php echo base_url('data_buku/tambah_data_buku'); ?>" class="btn btn-primary btn-lg">Tambah Data Buku</a>
		</div>
	</div>	
	<div class="row">
		<div class="col-lg-12">
		<?=form_open(base_url() . 'data_buku/search'); ?>
		<div class="form-inline">
			<div class="form-group">
				<select name="selCategory" class="form-control">
					<option value="0">Search By</option>
					<option value="idemployee">ID Buku</option>
					<option value="employeeno">ISBN</option>
					<option value="employeename">Judul Buku</option>
					<option value="deptdesc">Pengarang</option>
					<option value="positiondesc">Penerbit</option>
					<option value="code">Tahun Terbit</option>
					<option value="extension">Kode Rak</option>
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
			<th>ISBN</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
			<th>Keterangan</th>
			<th>Kode Rak</th>
			<th>Aksi</th>
		</tr>

		<?php
		$no = 1;
		foreach ($books as $book): ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $book->id_buku; ?></td>
			<td><?php echo $book->isbn; ?></td>
			<td><?php echo $book->judul_buku; ?></td>			
			<td><?php echo $book->nama_pengarang; ?></td>
			<td><?php echo $book->nama_penerbit; ?></td>
			<td><?php echo $book->tahun_terbit; ?></td>
			<td><?php echo $book->keterangan; ?></td>
			<td><?php echo $book->kode_rak; ?></td>
			
			<td><a href="<?php echo base_url('data_buku/edit_data_buku/') . $book->id_buku; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>	
		</tr>
		<?php $no++; ?>
		<?php endforeach ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	