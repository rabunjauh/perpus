<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">	                
  			<div class="card-body">
  				<?php echo validation_errors(); ?>

				<?php echo form_open(base_url('data_buku/peminjaman_baru')); ?>
				<div class="form-group">
					<label for="anggota">Anggota :</label>
					<input type="text" name="anggota" id="anggota" value="<?= $getLoan->nama_anggota ?>" readonly class="form-control form_nama_anggota" required>
				</div>

				<div class="form-group">
					<label for="tanggal_peminjaman">Tanggal Peminjaman :</label>
					<input type="text" name="tanggal_peminjaman" id="tanggal_peminjaman" value="<?= $getLoan->tanggal_peminjaman ?>" readonly class="form-control" required>
				</div>	

				<div class="form-group">
					<label for="dueDate">Tanggal Jatuh Tempo :</label>
					<input type="text" name="dueDate" id="dueDate" value="<?= $getLoan->dueDate ?>" readonly class="form-control" required>
				</div>			
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="card mb-4">	                
  			<div class="card-body">
				<div class="form-group">
					<label for="lateCharge">Denda :</label>
					<input type="text" name="lateCharge" id="lateCharge" value="<?= $getLoan->dueDate ?>" readonly class="form-control" required>
				</div>

				<div class="form-group">
					<label for="returnDate">Tanggal Pengembalian :</label>
					<input type="text" name="returnDate" id="returnDate" readonly class="form-control tanggal" required>
				</div>				
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="card mb-4">	                
  			<div class="card-body">

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
							            <th>Kondisi Buku</th>
							          </tr>
							        </thead>
							        <tfoot>
							          <tr>
							            <th>#</th>
							            <th>ID Detail Peminjaman</th>
							            <th>Judul Buku</th>
							            <th>Jumlah Buku</th>
							            <th>Kondisi Buku</th>
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
									<td>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="condition" id="condition" value="Ok">
										  <label class="form-check-label" for="inlineRadio1">Ok</label>
										</div>

										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="condition" id="condition" value="Damage">
										  <label class="form-check-label" for="inlineRadio2">Damage</label>
										</div>
									</td>								
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
						<button type="submit" class="btn btn-primary btn-icon-split" id="button_tambah_peminjaman_buku" name="button_tambah_peminjaman_buku">
							<span class="icon text-white-50"><i class="fas fa-save"></i></span>
				        	<span class="text">Save</span>
				    	</button>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
