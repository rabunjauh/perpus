<div class="container box">	
	<div class="row">
		<div class="col-lg-6">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">			
			<a href="<?php echo base_url('data_jurusan/tambah_data_jurusan'); ?>" class="btn btn-primary btn-lg">Tambah Data Jurusan</a>
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
			<th>ID Jurusan</th>
			<th>Jurusan</th>
			<th>Action</th>
		</tr>

		<?php		
		$no = 1;
		foreach ($jurusan as $value): ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $value->id_jurusan; ?></td>
			<td><?php echo $value->jurusan; ?></td>			
			<td><a href="<?php echo base_url('data_jurusan/edit_data_jurusan/' . $value->id_jurusan); ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>	
		</tr>
		<?php $no++; ?>
		<?php endforeach ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	
<!-- comment -->