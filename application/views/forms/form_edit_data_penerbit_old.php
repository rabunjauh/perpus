<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors(); ?>

			<?php echo form_open(base_url('data_penerbit/edit_data_penerbit/' . $edit_penerbit_values->id_penerbit)); ?>

				<div class="form-group">
					<label for="id_penerbit">ID Penerbit :</label>
					<input type="text" name="id_penerbit" class="form-control" value="<?php echo $edit_penerbit_values->id_penerbit; ?>" placeholder="ID Penerbit" disabled>
				</div>

				<div class="form-group">
					<label for="nama_penerbit">Nama Penerbit :</label>
					<input type="text" name="nama_penerbit" class="form-control" value="<?php echo $edit_penerbit_values->nama_penerbit; ?>" placeholder="Nama Penerbit">
				</div>

				<div class="form-group"> 	 	
					<button type="submit" class="btn btn-primary" name="button_edit_penerbit"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>