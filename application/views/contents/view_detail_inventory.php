<div class="card shadow mb-4">
	<div class="card-header py-3">

	</div>
	
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
			          <tr>
			            <th>#</th>
			            <th>ID Detail Inventory</th>
			            <th>Judul Buku</th>
			            <th>Jumlah Buku</th>
			            <th>Aksi</th>
			          </tr>
			        </thead>
			        <tfoot>
			          <tr>
			            <th>#</th>
			            <th>ID Detail Inventory</th>
			            <th>Judul Buku</th>
			            <th>Jumlah Buku</th>
			            <th>Aksi</th>
			          </tr>
			        </tfoot>
			        <tbody>

				<?php
					if($inventory_details){
				        $no = 1;
					foreach ($inventory_details as $inventory_detail):
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $inventory_detail->id_detail_inventory; ?></td>
					<td><?php echo $inventory_detail->judul_buku; ?></td>
					<td><?php echo $inventory_detail->jumlah_buku; ?></td>
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
			<?php echo $this->pagination->create_links(); ?>
	</div>
</div>