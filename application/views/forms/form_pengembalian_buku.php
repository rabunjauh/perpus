<div class="row">
	<div class="col-lg-12">
		<div class="card mb-4">	                
  			<div class="card-body">
				<?php echo validation_errors(); ?>

				<?php echo form_open(base_url('data_buku/peminjaman_baru')); ?>
					<div class="form-group">
						<label for="pengarang_buku">Anggota :</label>
						<input type="text" name="anggota" id="anggota" readonly class="form-control form_nama_anggota" required>
						<input type="hidden" class = "form_id_anggota" name="id_anggota" id="id_anggota" required>
					</div>
			
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Buku</h6>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
								          <tr>
								            <th>#</th>
								            <th>ID Detail Peminjaman</th>
								            <th>Judul Buku</th>
								            <th>Jumlah Buku</th>
								            <th>Aksi</th>
								          </tr>
								        </thead>
								        <tfoot>
								          <tr>
								            <th>#</th>
								            <th>ID Detail Peminjaman</th>
								            <th>Judul Buku</th>
								            <th>Jumlah Buku</th>
								            <th>Aksi</th>
								          </tr>
								        </tfoot>
								        <tbody>

									<?php
										if($borrow_details){
									        $no = 1;
										foreach ($borrow_details as $borrow_detail):
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $borrow_detail->id_detail_peminjaman; ?></td>
										<td><?php echo $borrow_detail->judul_buku; ?></td>
										<td><?php echo $borrow_detail->jumlah_buku; ?></td>
										<td></td>
										

											
									</tr>
								          <?php $no++; ?>
								          <?php endforeach; ?>
								          <?php }else{ ?>
								            <tr><td colspan="7">No Data</td></tr>
								          <?php } ?>
								        </tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="form-group">
						<button type="button" class="btn btn-primary" id="cari_buku" onclick="buka('<?php echo base_url('data_buku/cari_buku'); ?>')">
							Cari Buku <i class="fas fa-search"></i>
						</button>
					</div>

					<div class="form-group">
						<label for="jurusan" >Tanggal Peminjaman :</label>
						<input type="text" readonly name="tanggal_peminjaman" class="form-control tanggal_peminjaman" required placeholder="Tanggal Peminjaman" data-date-format="yyyy-mm-dd">
					</div>

					<div class="form-group">
						<label for="keterangan">Keterangan :</label>
						<textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-icon-split" id="button_tambah_peminjaman_buku" data-max_pinjam ="<?= $setting->jumlah_max ?>" name="button_tambah_peminjaman_buku">
							<span class="icon text-white-50"><i class="fas fa-save"></i></span>
				        	<span class="text">Save</span>
				    	</button>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
