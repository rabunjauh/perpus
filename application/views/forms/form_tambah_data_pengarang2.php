<div class="container box">
	<div class="row">
		<div class="col-lg-6">
			<h3><?php echo $title; ?></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open(base_url('data_pengarang/tambah_data_pengarang')); ?>
				<!-- <div class="form-group form_tambah">
					<label for="nama_pengarang">Nama Pengarang :</label>
					<input type="text" name="nama_pengarang[]" id="nama_pengarang" class="form-control form_nama_pengarang" placeholder="Nama Pengarang">
					<button type="button" id="tambah_form" class="btn btn-warning">Add More Row</button>
				</div>
				<div class="form-group">
					<button type="submit" name="tambah_pengarang" class="btn btn-primary">Save</button>
				</div> -->
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pengarang</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><input type="text" name="nama_pengarang[]" id="nama_pengarang" class="form-control form_nama_pengarang" placeholder="Nama Pengarang"></td>
							<td><button type="button" id="del_row" class="btn btn-danger">Delete</button></td>
						</tr>
					</tbody>
				</table>
				<div class="form-group">
					<button type="submit" name="tambah_pengarang" class="btn btn-primary">Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<button type="button" id="tambah_form" class="btn btn-warning">Add More Row</button>
			</div>
		</div>
	</div>
</div>

