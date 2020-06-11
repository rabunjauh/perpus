<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">
			<div class="card-body">
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
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-icon-split" name="button_edit_pengarang">
      <span class="icon text-white-50"><i class="fas fa-save"></i></span>
      <span class="text">Save</span>
    </button>
	</div>		
</div>	
<?php echo form_close(); ?>
	<div class="col-lg-3 text-right">
		<a href="<?= base_url('data_pengarang') ?>" class="btn btn-info btn-icon-split btn_back">
	  <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
	  <span class="text">Back</span>
	</a>	
	</div>		
</div>