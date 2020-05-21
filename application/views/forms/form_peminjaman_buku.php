
	
	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors(); ?>

			<?php echo form_open(base_url('data_buku/peminjaman_baru')); ?>
				<div class="form-group">
					<label for="anggota">Nama Anggota :</label>
					<input type="text" name="pengarang_buku" id="pengarang_buku" readonly class="form-control form_nama_pengarang">
					<input type="hidden" class = "form_id_pengarang" name="id_pengarang" id="id_pengarang">
					<button type="button" class="btn btn-primary" id="cari_pengarang" onclick="buka('<?php echo base_url('data_anggota/cari_anggota'); ?>')">
  						Cari Pengarang <li class="glyphicon glyphicon-search">
					</button>
				</div>

				<div class="form-group">
					<label for="buku">Buku :</label>
					<select name="buku" required class="form-control">
						<option value="">Buku</option>
						<?php foreach ($books as $book): ?>
						<option value="<?php echo $book->id_buku; ?>">
							<?php 
							echo $book->id_buku . " | " . $book->judul_buku . " | " . $book->isbn . " | " . $book->nama_pengarang . " | " . $book->nama_penerbit; 
							?>								
						</option>
						<?php endforeach ?>
					</select>
				</div>

				<div class="form-group">
					<label for="jumlah_buku">Jumlah Buku :</label>
					<input type="text" name="jumlah_buku" class="form-control" placeholder="Jumlah Buku" required>
				</div>

				<div class="form-group">
					<label for="tanggal_peminjaman">Tanggal Peminjaman :</label>
					<input type="text" name="tanggal_peminjaman" class="form-control" placeholder="Tanggal Peminjaman" required>
				</div>

				<div class="form-group">
					<label for="keterangan">Keterangan :</label>
					<textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="button_tambah_peminjaman_buku"><li class="glyphicon glyphicon-floppy_disk"></li> Save</button>
				</div>
		</div>
	</div>
