<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors(); ?>

			<?php echo form_open(base_url('data_jurusan/edit_data_jurusan/' . $edit_jurusan_values->id_jurusan)); ?>

				<div class="form-group">
					<label for="id_jurusan">ID Jurusan :</label>
					<input type="text" name="id_jurusan" class="form-control" value="<?php echo $edit_jurusan_values->id_jurusan; ?>" placeholder="ID jurusan" disabled>
				</div>

				<div class="form-group">
					<label for="jurusan">Jurusan :</label>
					<input type="text" name="jurusan" class="form-control" value="<?php echo $edit_jurusan_values->jurusan; ?>" placeholder="Nama jurusan">
				</div>

				<div class="form-group"> 	 	
					<button type="submit" class="btn btn-primary" name="button_edit_jurusan"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>