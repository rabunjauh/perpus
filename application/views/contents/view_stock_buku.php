<div class="card shadow mb-4">
	<div class="card-header py-3">
		<?php
			$attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
			echo form_open(base_url('data_buku/search_stock_buku'), $attributes);
		?>		
		<div class="form-group">
			<label>Cari Berdasarkan :</label>
			<select name="select_category" class="form-control">
				<option value="0">Semua</option>
				<option value="id_stock_buku">ID Stock Buku</option>
				<option value="isbn">ISBN</option>
				<option value="kode_buku">Kode Buku</option>
				<option value="judul_buku">Judul Buku</option>
				<option value="nama_pengarang">Pengarang</option>
				<option value="nama_penerbit">Penerbit</option>
				<option value="tahun_terbit">Tahun Terbit</option>
				<option value="kode_rak">Kode Rak</option>
			</select>						
			<input type="text" class="form-control" name="txt_search" placeholder="Search">
			<button type="submit" name="btn_search" class="btn btn-primary"><i class="fas fa-search fa-sm"></i> Search</button>
		</div>		
			<?=form_close(); ?>

		<h6 class="m-0 font-weight-bold text-primary">Search Result : <?php echo $result; ?></h6>
	</div>
	
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
			          <tr>
			            <th>ID</th>
						<th>ISBN</th>
						<th>Judul Buku</th>
						<th>Pengarang</th>
						<th>Penerbit</th>
						<th>Tahun Terbit</th>
						<th>Jumlah Stock</th>
						<th>Aksi</th>
			          </tr>
			        </thead>
			        <tfoot>
			          <tr>
			            <th>ID</th>
						<th>ISBN</th>
						<th>Judul Buku</th>
						<th>Pengarang</th>
						<th>Penerbit</th>
						<th>Tahun Terbit</th>
						<th>Jumlah Stock</th>
						<th>Aksi</th>
			          </tr>
			        </tfoot>
			        <tbody>

				<?php
					if($stocks){
				        $no = $no+1;
					foreach ($stocks as $stock):
				?>
				<tr>
					<td><?php echo $stock->id_stock_buku; ?></td>
					<td><?php echo $stock->isbn; ?></td>
					<td><?php echo $stock->judul_buku; ?></td>			
					<td><?php echo $stock->nama_pengarang; ?></td>
					<td><?php echo $stock->nama_penerbit; ?></td>
					<td><?php echo $stock->tahun_terbit; ?></td>
					<td><?php echo $stock->stock_buku; ?></td>	
					<td>
						<a  href="<?php echo base_url('data_buku/delete_data_buku/') . $stock->id_stock_buku; ?>">
							<button type="button" class="btn btn-danger btn-sm btn_del"><i class="fas fa-trash fa-sm"></i></button>
						</a>
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
			<?php echo $this->pagination->create_links(); ?>
	</div>
</div>