<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?php echo validation_errors(); ?>

			<?php echo form_open(base_url('data_buku/tambah_inventory_buku')); ?>				
				<div class="form-group">
					<label for="judul_buku">Judul Buku :</label>
					<select name="judul_buku" required class="form-control">
						<option value="">Judul Buku</option>
						<?php foreach ($books as $book): ?>
							<option value="<?php echo $book->id_buku; ?>">
								<?php 
									echo $book->id_buku . " | " . $book->isbn . " | " . $book->judul_buku . " | " . $book->nama_pengarang . " | " . $book->nama_penerbit; 
								?></option>}
						<?php endforeach ?>
					</select>
				</div>

				<div class="form-group">
					<label for="qty">Quantity</label>
					<input type="text" name="qty" class="form-control" placeholder="Quantity" required>
				</div>

				<div class="form-group">
					<label for="tgl_inventory">Tanggal Inventory</label>
					<input type="text" name="tgl_inventory" class="form-control" placeholder="Tanggal Inventory" required>
				</div>

				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="button_tambah_inventory"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>		
		</div>		
	</div>
</div>