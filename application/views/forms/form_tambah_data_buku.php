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
							<button type="button" class="btn btn-primary" id="cari_pengarang" onclick="buka('<?php echo base_url('data_pengarang/cari_pengarang'); ?>')">
		  						Cari Pengarang <i class="fas fa-search"></i>
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
		<div class="col-lg-6">
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="button_tambah" id="button_tambah"><i class="fas fa-save"></i> Save</button>
			</div>			
		</div>
	</div>
			<?php echo form_close(); ?>




