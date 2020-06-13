<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">
			<div class="card-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open(base_url('data_rak/edit_data_rak/' . $edit_rak_values->id_rak)); ?>

					<div class="form-group">
						<label for="id_rak">ID Rak :</label>
						<input type="text" name="id_rak" class="form-control" value="<?php echo $edit_rak_values->id_rak; ?>" placeholder="ID Rak" disabled>
					</div>

					<div class="form-group">
						<label for="kode_rak">Nama Rak :</label>
						<input type="text" name="kode_rak" class="form-control" value="<?php echo $edit_rak_values->kode_rak; ?>" placeholder="Kode Rak">
					</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-icon-split" name="button_edit_rak">
	     		<span class="icon text-white-50"><i class="fas fa-save"></i></span>
	      		<span class="text">Save</span>
    		</button>
		</div>		
	</div>	
	<?php echo form_close(); ?>
	<div class="col-lg-3 text-right">
		<a href="<?= base_url('data_rak') ?>" class="btn btn-info btn-icon-split btn_back">
		  	<span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		  	<span class="text">Back</span>
		</a>	
	</div>		
</div>