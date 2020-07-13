<div class="row">
	<div class="col-lg-12">
		<div class="card mb-4">	                
  			<div class="card-body">
				<?php echo validation_errors(); ?>

				<?php echo form_open(base_url('data_buku/edit_inventory_buku/' . $edit_inventory_value->id_inventory)); ?>
					<div class="form-group">
						<label for="jurusan" >Tanggal Inventory :</label>
						<input type="text" readonly name="tgl_inventory" class="form-control tanggal" required placeholder="Tanggal Inventory" data-date-format="yyyy-mm-dd" value="<?php echo $edit_inventory_value->tgl_inventory; ?>">
					</div>

				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea name="keterangan" class="form-control" placeholder="Keterangan"><?= $edit_inventory_value->keterangan; ?></textarea>
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
									<th>Kode Buku</th>
									<th>Judul Buku</th>
									<th>Jumlah</th>
									<th>Delete</th>
									</tr>
									</thead>

									<tfoot>
									<tr>
									<th>#</th>
									<th>Kode Buku</th>
									<th>Judul Buku</th>
									<th>Jumlah</th>
									<th>Delete</th>
									</tr>
									</tfoot>

									<tbody id="tbody_form_pinjam_buku">	
									<?php 
										if($books): 
											foreach($books as $book):
											$no = 1;	
									?>

										<tr>
											<td><?= $no ?></td>
											<td>
												<input type="hidden" name="id_buku[]" id="id_buku" value="<?= $book->id_buku ?>" class="form-control form_id_buku">
												<?= $book->kode_buku ?>
											</td>	
											<td>
												<?= $book->judul_buku ?>
											</td>
											<td>
												<input type="text" name="jumlah_buku[]" id="jumlah_buku" value="<?= $book->jumlah_buku ?>" class="form-control form_id_buku" placeholder="Jumlah Buku" required>
											</td>
											<td>
												<button type="button" name="btn_del_row_pinjam_buku" id="btn_del_row_pinjam_buku" class="btn btn-danger" onclick="remove_del()">Delete</button>
											</td>
										</tr>

									<?php
									 		endforeach;
									 	endif;	 
									?>							
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
						<button type="submit" class="btn btn-primary btn-icon-split" id="button_tambah_inventory_buku" name="button_tambah_inventory_buku">
							<span class="icon text-white-50"><i class="fas fa-save"></i></span>
				        	<span class="text">Save</span>
				    	</button>
					</div>

				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
