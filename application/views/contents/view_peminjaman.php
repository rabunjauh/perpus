<div class="container box">	
	<div class="row">
		<div class="col-lg-6">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">			
			<a href="<?php echo base_url('data_buku/peminjaman_baru'); ?>" class="btn btn-primary btn-lg">Peminjaman Baru</a>
		</div>
	</div>	

	<div class="row">
	<p></p>	
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
			<th>ID Peminjaman</th>
			<th>Nama Anggota</th>
			<th>No Induk</th>
			<th>Judul Buku</th>
			<th>Quantity</th>
			<th>Tanggal Peminjaman</th>
			<th>Keterangan</th>
		</tr>

		<?php
		// var_dump($borrows);die;
		foreach ($borrows as $borrow): ?>
		<tr>
			<td></td>
			<td><?php echo $borrow->id_peminjaman; ?></td>
			<td><?php echo $borrow->nama_anggota; ?></td>			
			<td><?php echo $borrow->no_induk; ?></td>			
			<td><?php echo $borrow->judul_buku; ?></td>			
			<td><?php echo $borrow->jumlah_buku; ?></td>			
			<td><?php echo $borrow->tanggal_peminjaman; ?></td>			
			<td><?php echo $borrow->keterangan; ?></td>			
			<td><a href=""><span class="glyphicon glyphicon-edit"></span> Edit</a></td>	
		</tr>
		<?php endforeach ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	
<!-- comment -->