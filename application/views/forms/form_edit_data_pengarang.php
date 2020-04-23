<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors(); ?>

			<?php echo form_open(base_url('data_pengarang/edit_data_pengarang/' . $edit_pengarang_values->id_pengarang)); ?>

				<div class="form-group">
					<label for="id_pengarang">ID Pengarang :</label>
					<input type="text" name="id_pengarang" class="form-control" value="<?php echo $edit_pengarang_values->id_pengarang; ?>" placeholder="ID Pengarang" disabled>
				</div>

				<div class="form-group">
					<label for="nama_pengarang">Nama Pengarang :</label>
					<input type="text" name="nama_pengarang" class="form-control" value="<?php echo $edit_pengarang_values->nama_pengarang; ?>" placeholder="Nama Pengarang">
				</div>

				<div class="form-group"> 	 	
					<button type="submit" class="btn btn-primary" name="button_edit_pengarang"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>