<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">
			<div class="card-body">
				<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
				<?php echo form_open(base_url('data_pengarang/tambah_data_pengarang')); ?>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pengarang</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr class="tr_multiple">
								<td>1</td>
								<td><input type="text" name="nama_pengarang[]" id="nama_pengarang" class="form-control form_nama_pengarang" placeholder="Nama Pengarang" required></td>
								<td></td>
							</tr>
						</tbody>
					</table>
					 <div class="row">
					 	<div class="col-lg-4">
					 		<div class="form-group">
								<button type="button" id="btn_add_row" name="btn_add_row" class="btn btn-success" onclick="add_row('btn_add_row_pengarang')">Add Row</button>
							</div>
					 	</div>
					</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-icon-split" name="tambah_pengarang">
        <span class="icon text-white-50"><i class="fas fa-save"></i></span>
        <span class="text">Save</span>
      </button>

      <button type="reset" class="btn btn-warning btn-icon-split btn_reset" name="button_reset">
        <span class="icon text-white-50"><i class="fas fa-undo"></i></span>
        <span class="text">Reset</span>
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

