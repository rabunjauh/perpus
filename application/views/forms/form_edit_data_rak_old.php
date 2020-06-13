<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors(); ?>

			<?php echo form_open(base_url('data_rak/edit_data_rak/' . $edit_rak_values->id_rak)); ?>

				<div class="form-group">
					<label for="id_rak">ID Rak :</label>
					<input type="text" name="id_rak" class="form-control" value="<?php echo $edit_rak_values->id_rak; ?>" placeholder="ID Rak" disabled>
				</div>

				<div class="form-group">
					<label for="nama_rak">Kode Rak :</label>
					<input type="text" name="kode_rak" class="form-control" value="<?php echo $edit_rak_values->kode_rak; ?>" placeholder="Kode Rak">
				</div>

				<div class="form-group"> 	 	
					<button type="submit" class="btn btn-primary" name="button_edit_rak"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>