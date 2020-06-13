<div class="container box">
	<div class="row">
		<div class="col-lg-6">
			<h3><?php echo $title; ?></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			<?php echo form_open(base_url('data_rak/tambah_data_rak')); ?>
				<div class="form-group">
					<label for="kode_rak">Kode Rak :</label>
					<input type="text" name="kode_rak" class="form-control" placeholder="Kode Rak">
				</div>
				<div class="form-group">
					<button type="submit" name="tambah_rak" class="btn btn-primary">Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
