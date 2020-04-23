<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors(); ?>

			<?php echo form_open(base_url('data_akun/edit_data_akun/' . $edit_akun_values->id_akun)); ?>

				<div class="form-group">
					<label for="id_akun">ID Akun :</label>
					<input type="text" name="id_akun" class="form-control" value="<?php echo $edit_akun_values->id_akun; ?>" placeholder="ID Akun" disabled>
				</div>

				<div class="form-group">
					<label for="nama_akun">Nama Akun :</label>
					<input type="text" name="nama_akun" class="form-control" value="<?php echo $edit_akun_values->nama_akun; ?>" placeholder="Nama Akun">
				</div>

				<div class="form-group"> 	 	
					<button type="submit" class="btn btn-primary" name="button_edit_akun"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>