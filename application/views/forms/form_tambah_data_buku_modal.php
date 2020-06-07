<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">	                
			<div class="card-body"> 
				<?php echo validation_errors(); ?>

				<?php echo form_open(base_url('data_buku/tambah_data_buku')); ?>
					<div class="form-group">
						<label for="isbn">ISBN :</label>
						<input type="text" name="isbn" class="form-control" placeholder="ISBN" required>
					</div>

					<div class="form-group">
						<label for="judul_buku">Judul Buku :</label>
						<input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku" required>
					</div>

					<!-- <div class="form-group">
						<label for="pengarang_buku">Pengarang Buku :</label>
						<input type="text" name="pengarang_buku" id="pengarang_buku" readonly class="form-control form_nama_pengarang">
						<input type="hidden" class = "form_id_pengarang" name="id_pengarang" id="id_pengarang">
						<button type="button" class="btn btn-primary" id="cari_pengarang">
	  						Cari Pengarang
						</button>
					</div> -->

					<div class="form-group">
						<label for="pengarang_buku">Pengarang Buku :</label>
						<input type="text" name="pengarang_buku" id="pengarang_buku" readonly class="form-control form_nama_pengarang">
						<input type="hidden" class = "form_id_pengarang" name="id_pengarang" id="id_pengarang">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_author">
						  Cari Pengarang
						</button>
					</div>

					<div class="form-group">
						<label for="penerbit_buku">Penerbit Buku :</label>
						<input type="text" name="penerbit_buku" id="penerbit_buku" readonly class="form-control form_nama_penerbit">
						<input type="hidden" class = "form_id_penerbit" name="id_penerbit" id="id_penerbit">
						<button type="button" class="btn btn-primary" id="cari_penerbit"onclick="buka('<?php echo base_url('data_penerbit/cari_penerbit'); ?>')">
	  						Cari Penerbit <i class="fas fa-search"></i>
						</button>
					</div>				
			</div>
		</div>				
	</div>

	<div class="col-lg-6">
		<div class="card mb-4">	                
	  		<div class="card-body">
				<div class="form-group">
					<label for="tahun_terbit">Tahun Terbit :</label>
					<input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
				</div>

				<div class="form-group">
					<label for="kode_rak">Kode Rak :</label>
					<input type="text" name="rak_buku" id="rak_buku" readonly class="form-control form_kode_rak">
					<input type="hidden" class = "form_id_rak" name="id_rak" id="id_rak">
					<button type="button" class="btn btn-primary" id="cari_rak"onclick="buka('<?php echo base_url('data_rak/cari_rak'); ?>')"></li>
							Cari Rak <i class="fas fa-search"></i>
					</button>
				</div>			

				<div class="form-group">
					<label for="keterangan">Keterangan :</label>
					<textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-icon-split" name="button_tambah">
        <span class="icon text-white-50"><i class="fas fa-save"></i></span>
        <span class="text">Save</span>
      </button>

      <button type="reset" class="btn btn-warning btn-icon-split" name="button_reset">
        <span class="icon text-white-50"><i class="fas fa-undo"></i></span>
        <span class="text">Reset</span>
      </button>
		</div>		
	</div>	

		<?php echo form_close(); ?>
	<div class="col-lg-9 text-right">
		<a href="<?= base_url('data_buku') ?>" class="btn btn-info btn-icon-split">
    <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
    <span class="text">Back</span>
  </a>	
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_author" tabindex="-1" role="dialog" aria-labelledby="modal_author_label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_author_label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $content_pengarang; ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






