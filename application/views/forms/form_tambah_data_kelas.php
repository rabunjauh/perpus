<div class="container box">
	<div class="row">
		<div class="col-lg-6">
			<h3><?php echo $title; ?></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open(base_url('data_kelas/tambah_data_kelas')); ?>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kelas</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tr_multiple">
							<td>1</td>
							<td><input type="text" name="kelas[]" id="kelas" class="form-control form_nama_kelas" placeholder="Kelas" required></td>
							<td></td>
						</tr>
					</tbody>
				</table>
				 <div class="row">
				 	<div class="col-lg-4">
				 		<div class="form-group">
							<button type="button" id="btn_add_row_kelas" name="btn_add_row" class="btn btn-success" onclick="add_row('btn_add_row_kelas')">Add Row</button>
						</div>
				 	</div>

				 	<div class="col-lg-8">
				 		<div class="form-group">
							<button type="submit" name="tambah_kelas" class="btn btn-primary pull-right">Save</button>
						</div>
				 	</div>
				</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-lg-4">
			
		</div>	
	</div>
</div>



