<div class="card shadow mb-4">	
	<div class="card-header py-3">
		<?php 
			$attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
			echo form_open(base_url('data_buku/search_stock_buku'), $attributes);	 
		?>
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
			<th>ID</th>
			<th>ISBN</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
			<th>Jumlah Stock</th>
			<th>Aksi</th>
		</tr>

		<?php
		foreach ($stocks as $stock): ?>
		<tr>
			<td><?php echo $stock->id_buku; ?></td>
			<td><?php echo $stock->isbn; ?></td>
			<td><?php echo $stock->judul_buku; ?></td>			
			<td><?php echo $stock->nama_pengarang; ?></td>
			<td><?php echo $stock->nama_penerbit; ?></td>
			<td><?php echo $stock->tahun_terbit; ?></td>
			<td><?php echo $stock->stock_buku; ?></td>
			
			<td><a href="<?php echo base_url('data_buku/edit_data_buku/') . $stock->id_buku; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>	
		</tr>
		<?php endforeach ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	