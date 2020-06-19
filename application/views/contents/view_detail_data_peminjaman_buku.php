<div class="card shadow mb-4">
	<div class="card-header py-3">

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
				        // $no = $no+1;
					foreach ($borrow_details as $borrow_detail):
				?>
				<tr>
					<td><?php //echo $no; ?></td>
					<td><?php echo $borrow_detail->id_detail_peminjaman; ?></td>
					<td><?php echo $borrow_detail->judul_buku; ?></td>
					<td><?php echo $borrow_detail->jumlah_buku; ?></td>
					<td></td>
					

						
				</tr>
			          <?php //$no++; ?>
			          <?php endforeach; ?>
			          <?php }else{ ?>
			            <tr><td colspan="7">No Data</td></tr>
			          <?php } ?>
			        </tbody>
			</table>
		</div>
			<?php echo $this->pagination->create_links(); ?>
	</div>
</div>