<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">
			<div class="card-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open(base_url('data_kelas/edit_data_kelas/' . $edit_kelas_values->id_kelas)); ?>

					<div class="form-group">
						<label for="id_kelas">ID Kelas :</label>
						<input type="text" name="id_kelas" class="form-control" value="<?php echo $edit_kelas_values->id_kelas; ?>" placeholder="ID Kelas" disabled>
					</div>

					<div class="form-group">
						<label for="kelas">Kelas :</label>
						<input type="text" name="kelas" class="form-control" value="<?php echo $edit_kelas_values->kelas; ?>" placeholder="Kelas">
					</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-icon-split" name="button_edit_kelas">
      <span class="icon text-white-50"><i class="fas fa-save"></i></span>
      <span class="text">Save</span>
    </button>
	</div>		
</div>	
<?php echo form_close(); ?>
	<div class="col-lg-3 text-right">
		<a href="<?= base_url('data_kelas') ?>" class="btn btn-info btn-icon-split btn_back">
	  <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
	  <span class="text">Back</span>
	</a>	
	</div>		
</div>