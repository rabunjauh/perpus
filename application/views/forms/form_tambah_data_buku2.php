

<div class="container box">
	<div class="row">
		<h3 id="judul"><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">

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

				<div class="form-group">
					<label for="pengarang_buku">Pengarang Buku :</label>
					<select name="pengarang_buku" required class="form-control">
						<option value="">Pengarang</option>
						<?php foreach ($authors as $author): ?>
							<option value="<?php echo $author->id_pengarang; ?>"><?php echo $author->nama_pengarang; ?></option>}
						<?php endforeach ?>
					</select>
					<button type="button" id="button" onclick="cari()">cari</button>
				</div>

				<div class="form-group">
					<label for="penerbit_buku">Penerbit Buku :</label>
					<select name="penerbit_buku" required class="form-control">
						<option value="">Penerbit</option>
							<?php foreach ($publishers as $publisher): ?>
								<option value="<?php echo $publisher->id_penerbit; ?>"><?php echo $publisher->nama_penerbit; ?></option>
							<?php endforeach ?>
					</select>
				</div>

				<div class="form-group">
					<label for="tahun_terbit">Tahun Terbit :</label>
					<input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
				</div>

				<div class="form-group">
					<label for="keterangan">Keterangan :</label>
					<textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
				</div>

				<div class="form-group">
					<label for="kode_rak">Kode Rak :</label>
					<select name="kode_rak" required class="form-control">
						<option value="">Kode Rak</option>
							<?php foreach ($bookshelves as $bookshelf): ?>
								<option value="<?php echo $bookshelf->id_rak; ?>"><?php echo $bookshelf->kode_rak; ?></option>
							<?php endforeach ?>
					</select>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="button_tambah"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<script src="<?php echo base_url('assets/js/script.js') ?>"></script>

