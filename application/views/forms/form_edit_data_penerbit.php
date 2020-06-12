<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">
			<div class="card-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open(base_url('data_penerbit/edit_data_penerbit/' . $edit_penerbit_values->id_penerbit)); ?>

					<div class="form-group">
						<label for="id_penerbit">ID Penerbit :</label>
						<input type="text" name="id_penerbit" class="form-control" value="<?php echo $edit_penerbit_values->id_penerbit; ?>" placeholder="ID penerbit" disabled>
					</div>

					<div class="form-group">
						<label for="nama_penerbit">Nama Penerbit :</label>
						<input type="text" name="nama_penerbit" class="form-control" value="<?php echo $edit_penerbit_values->nama_penerbit; ?>" placeholder="Nama penerbit">
					</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-icon-split" name="button_edit_penerbit">
      <span class="icon text-white-50"><i class="fas fa-save"></i></span>
      <span class="text">Save</span>
    </button>
	</div>		
</div>	
<?php echo form_close(); ?>
	<div class="col-lg-3 text-right">
		<a href="<?= base_url('data_penerbit') ?>" class="btn btn-info btn-icon-split btn_back">
	  <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
	  <span class="text">Back</span>
	</a>	
	</div>		
</div>