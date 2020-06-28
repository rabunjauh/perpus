<div class="card shadow mb-4">
	<div class="card-header py-3">
		<?php
			$attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
			echo form_open(base_url('data_buku'), $attributes);
		?>		
		<div class="form-group">
			<label>Cari Berdasarkan :</label>
			<select name="select_category" class="form-control">
				<option value="0">Semua</option>
				<option value="id_buku">ID Buku</option>
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
			            <th>#</th>
			            <th>ID Buku</th>
			            <th>ISBN</th>
			            <th>Kode Buku</th>
			            <th>Judul Buku</th>
			            <th>Nama Pengarang</th>
			            <th>Nama Penerbit</th>
			            <th>Tahun Terbit</th>
			            <th>Keterangan</th>
			            <th>Kode Rak</th>
			            <th>Action</th>
			          </tr>
			        </thead>
			        <tfoot>
			          <tr>
			            <th>#</th>
			            <th>ID Buku</th>
			            <th>ISBN</th>
			            <th>Kode Buku</th>
			            <th>Judul Buku</th>
			            <th>Nama Pengarang</th>
			            <th>Nama Penerbit</th>
			            <th>Tahun Terbit</th>
			            <th>Keterangan</th>
			            <th>Kode Rak</th>
			            <th>Action</th>
			          </tr>
			        </tfoot>
			        <tbody>

				<?php
					if($books){
				        $no = $no+1;
					foreach ($books as $book):
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $book->id_buku; ?></td>
					<td><?php echo $book->isbn; ?></td>
					<td><?php echo $book->kode_buku; ?></td>
					<td><?php echo $book->judul_buku; ?></td>			
					<td><?php echo $book->nama_pengarang; ?></td>
					<td><?php echo $book->nama_penerbit; ?></td>
					<td><?php echo $book->tahun_terbit; ?></td>
					<td><?php echo $book->keterangan; ?></td>
					<td><?php echo $book->kode_rak; ?></td>		
					<td>
						<a href="<?php echo base_url('data_buku/edit_data_buku/') . $book->id_buku; ?>">
							<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-edit fa-sm"></i></button>
						</a>

						<a  href="<?php echo base_url('data_buku/delete_data_buku/') . $book->id_buku; ?>">
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