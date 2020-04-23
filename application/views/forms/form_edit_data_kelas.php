<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors(); ?>

			<?php echo form_open(base_url('data_kelas/edit_data_kelas/' . $edit_kelas_values->id_kelas)); ?>

				<div class="form-group">
					<label for="id_kelas">ID Kelas :</label>
					<input type="text" name="id_kelas" class="form-control" value="<?php echo $edit_kelas_values->id_kelas; ?>" placeholder="ID kelas" disabled>
				</div>

				<div class="form-group">
					<label for="kelas">Kelas :</label>
					<input type="text" name="kelas" class="form-control" value="<?php echo $edit_kelas_values->kelas; ?>" placeholder="Nama kelas">
				</div>

				<div class="form-group"> 	 	
					<button type="submit" class="btn btn-primary" name="button_edit_kelas"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>