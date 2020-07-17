<div class="card shadow mb-4">
	<div class="card-header py-3">
		<?php
			$attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
			echo form_open(base_url('data_buku/search_buku'), $attributes);
		?>		
		<div class="form-group">
			<label>Cari Berdasarkan :</label>
			<select name="select_category" class="form-control">
				<option value="0">Semua</option>
				<option value="id_peminjaman">ID Peminjaman</option>
				<option value="nama_anggota">Nama Anggota</option>
				<option value="tanggal_peminjaman">Tanggal Peminjaman</option>
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
			            <th>ID</th>
			            <th>No Induk</th>
			            <th>Nama Anggota</th>
			            <th>Tanggal Peminjaman</th>
			            <th>Tanggal Jatuh Tempo</th>
			            <th>Status</th>
			            <th>Aksi</th>
			          </tr>
			        </thead>
			        <tfoot>
			          <tr>
			            <th>#</th>
			            <th>ID</th>
			            <th>No Induk</th>
			            <th>Nama Anggota</th>
			            <th>Tanggal Peminjaman</th>
			            <th>Tanggal Jatuh Tempo</th>
			            <th>Status</th>
			            <th>Aksi</th>
			          </tr>
			        </tfoot>
			        <tbody>

				<?php
					if($borrows){
				        $no = 1;
					foreach ($borrows as $borrow):
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $borrow->id_peminjaman; ?></td>
					<td><?php echo $borrow->no_induk; ?></td>
					<td>
						<?php echo $borrow->nama_anggota; ?>
					</td>
					<td><?php echo $borrow->tanggal_peminjaman; ?></td>
					<td><?php echo $borrow->dueDate; ?></td>
					<td>
						<?php if($borrow->status_peminjaman_buku == 0){ ?>
							<span class="badge badge-danger">Belum kembali</span>
						<?php }else{ ?>
							<span class="badge badge-primary">Sudah kembali</span>
						<?php } ?>	 
					</td>	

					<td>
						<a href="<?php echo base_url('data_buku/detail_data_peminjaman_buku/') . $borrow->id_peminjaman; ?>">
							<button type="button" class="btn btn-dark btn-sm" data-toggle="tooltip" title="Hooray!"><i class="fas fa-eye fa-sm"></i></button>
						</a>

						<a href="<?php echo base_url('data_buku/returnBook/') . $borrow->id_peminjaman; ?>">
							<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-refresh fa-sm"></i></button>
						</a>

						<a href="<?php echo base_url('data_buku/editLoan/') . $borrow->id_peminjaman; ?>">
							<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-edit fa-sm"></i></button>
						</a>

						<a  href="<?php echo base_url('data_buku/delLoan/') . $borrow->id_peminjaman; ?>">
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