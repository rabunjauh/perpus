<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">
			<div class="card-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open(base_url('data_jurusan/edit_data_jurusan/' . $edit_jurusan_values->id_jurusan)); ?>

					<div class="form-group">
						<label for="id_jurusan">ID Jurusan :</label>
						<input type="text" name="id_jurusan" class="form-control" value="<?php echo $edit_jurusan_values->id_jurusan; ?>" placeholder="ID Jurusan" disabled>
					</div>

					<div class="form-group">
						<label for="jurusan">Jurusan :</label>
						<input type="text" name="jurusan" class="form-control" value="<?php echo $edit_jurusan_values->jurusan; ?>" placeholder="Jurusan">
					</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-icon-split" name="button_edit_jurusan">
      <span class="icon text-white-50"><i class="fas fa-save"></i></span>
      <span class="text">Save</span>
    </button>
	</div>		
</div>	
<?php echo form_close(); ?>
	<div class="col-lg-3 text-right">
		<a href="<?= base_url('data_jurusan') ?>" class="btn btn-info btn-icon-split btn_back">
	  <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
	  <span class="text">Back</span>
	</a>	
	</div>		
</div>