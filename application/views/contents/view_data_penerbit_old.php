<div class="container box">
    <div class="row">
        <div class="col-lg-12">
			<a href="<?php echo base_url('data_penerbit/tambah_data_penerbit'); ?>" class="btn btn-primary btn-lg">Tambah Data Penerbit</a>
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
					<td>ID</td>
					<td>Nama Penerbit</td>
					<td>Action</td>
				</tr>
				<?php foreach ($penerbit as $value) : ?>
					<tr>
						<td><?php echo $value->id_penerbit ;?></td>
						<td><?php echo $value->nama_penerbit ;?></td>
						<td><a href="<?php echo base_url('data_penerbit/edit_data_penerbit/' . $value->id_penerbit); ?>"><span class="glyphicon glyphicon-edit"> Edit</span></a></td>
					</tr>
				<?php endforeach ?>
			</table>
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>

</div>