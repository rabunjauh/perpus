<div class="container box">
	<div class="row">
		<div class="col-lg-12">
			<h3><?php echo $title; ?></h3>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
			<?php echo form_open(base_url('data_penerbit/tambah_data_penerbit')); ?>
			<div class="form-group">
				<label for="nama_penerbit">Nama Penerbit :</label>
				<input type="text" name="nama_penerbit" class="form-control" placeholder="Nama Penerbit">
			</div>
			<div class="form-group">
				<button type="submit" name="tambah_penerbit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>