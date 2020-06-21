<div class="container box">	
	<div class="row">
		<div class="col-lg-6">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">			
			<a href="<?php echo base_url('data_buku/tambah_inventory_buku'); ?>" class="btn btn-primary btn-lg">Buku Masuk</a>
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
			<th>ID Inventory</th>
			<th>ISBN</th>
			<th>Judul Buku</th>
			<th>Nama Pengarang</th>
			<th>Nama Penerbit</th>
			<th>Quantity</th>
			<th>Tanggal Inventory</th>
			<th>Keterangan</th>
			<th>Action</th>
		</tr>

		<?php
		foreach ($inventories as $inventory): ?>
		<tr>
			<td></td>
			<td><?php echo $inventory->id_inventory; ?></td>
			<td><?php echo $inventory->isbn; ?></td>			
			<td><?php echo $inventory->judul_buku; ?></td>			
			<td><?php echo $inventory->nama_pengarang; ?></td>			
			<td><?php echo $inventory->nama_penerbit; ?></td>			
			<td><?php echo $inventory->quantity_inventory; ?></td>			
			<td><?php echo $inventory->tgl_inventory; ?></td>			
			<td><?php echo $inventory->keterangan; ?></td>			
			<td><a href="<?php echo base_url('data_rak/edit_data_rak/' . $inventory->id_inventory); ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>	
		</tr>
		<?php endforeach ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	
<!-- comment -->