<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">	                
  			<div class="card-body">
  				<?php echo validation_errors(); ?>

				<?php echo form_open(base_url('data_buku/returnBook/' . $editLoanVal->id_peminjaman)); ?>
				<div class="form-group">
					<label for="pengarang_buku">Anggota :</label>
					<input type="text" name="anggota" id="anggota" value="<?= $editLoanVal->nama_anggota ?>" readonly class="form-control form_nama_anggota" required>
					<input type="hidden" class = "form_id_anggota" value="<?= $editLoanVal->id_anggota ?>" name="id_anggota" id="id_anggota" required>
				</div>

				<div class="form-group">
					<label for="tanggal_peminjaman">Tanggal Peminjaman :</label>
					<input type="text" name="tanggal_peminjaman" id="tanggal_peminjaman" value="<?= $editLoanVal->tanggal_peminjaman ?>" readonly class="form-control">
				</div>								
				
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="card mb-4">	                
  			<div class="card-body">
				<div class="form-group">
					<label for="dueDate">Tanggal Jatuh Tempo :</label>
					<input type="text" name="dueDate" id="dueDate" value="<?= $editLoanVal->dueDate ?>" readonly class="form-control">
				</div>

					<?php
						if ($editLoanVal->lateCharge){
					?>
				<div class="form-group">
					<label for="lateCharge">Denda :</label>
					<input type="text" name="lateCharge" id="lateCharge" value="<?= $editLoanVal->lateCharge ?>" readonly class="form-control" required>
				</div>
				<?php }else{ ?>	
				<div class="form-group">
					<label for="lateCharge">Denda :</label>
					<input type="text" name="lateCharge" id="lateCharge" value="-" readonly class="form-control" required>
				</div>
				<?php } ?>			
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
							          </tr>
							        </thead>
							        <tfoot>
							          <tr>
							            <th>#</th>
							            <th>ID Detail Peminjaman</th>
							            <th>Judul Buku</th>
							            <th>Jumlah Buku</th>
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
				<?php
					if($editLoanVal->status_peminjaman_buku == 0){ 
						$today = date_create(date("Y-m-d"));
						$dueDate = date_create($editLoanVal->dueDate);
						$lateDate = date_diff($dueDate, $today);
						if($lateDate->format("%a") > $setting->lama_pinjam){
							$lateCharge = intval($lateDate->format("%a")) * $setting->denda;
						}else{
							$lateCharge = "-";
						} 
				?>

					<div class="form-group">
						<input type="hidden" name="returnDate" id="returnDate" value="<?= date("Y-m-d") ?>" readonly class="form-control">
						<input type="hidden" name="lateCharge" id="lateCharge" value="<?= $lateCharge ?>" readonly class="form-control">
						<button type="submit" class="btn btn-primary btn-icon-split" id="button_tambah_peminjaman_buku" name="button_tambah_peminjaman_buku">
							<span class="icon text-white-50"><i class="fas fa-save"></i></span>
				        	<span class="text">Kembalikan Buku</span>
				    	</button>
					</div>
				<?php } ?>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
