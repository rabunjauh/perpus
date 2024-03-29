<div class="card shadow mb-4">
	<div class="card-header py-3">
		<?php 
			$attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
			echo form_open(base_url('data_jurusan/search_jurusan'), $attributes);	 
		?>
		<div class="form-inline">
			<div class="form-group">
				<label>Cari Berdasarkan : </label>
				<select name="select_category" class="form-control">
					<option value="0">Semua</option>
					<option value="id_jurusan">ID Jurusan</option>
					<option value="jurusan">Jurusan</option>
				</select>						
				<input type="text" class="form-control" name="txt_search" placeholder="Search">
				<button type="submit" name="btn_search" class="btn btn-primary"><i class="fas fa-search fa-sm"></i>Search</button>
			</div>
		</div>
		<?=form_close(); ?>
	 <h6 class="m-0 font-weight-bold text-primary">Search Result : <?php echo $result; ?> </h6>	
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			 <thead>
	          <tr>
	            <th>#</th>
	            <th>ID Jurusan</th>
	            <th>Jurusan</th>
	            <th>Action</th>
	          </tr>
	        </thead>
	        <tfoot>
	          <tr>
	            <th>#</th>
	            <th>ID Jurusan</th>
	            <th>Jurusan</th>
	            <th>Action</th>
	          </tr>
	        </tfoot>
	        <tbody>

				<?php
				if($jurusan){ 
		            $no = $no+1;
					foreach ($jurusan as $value): ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $value->id_jurusan; ?></td>
					<td><?php echo $value->jurusan; ?></td>			
					<td>
						<a href="<?php echo base_url('data_jurusan/edit_data_jurusan/' . $value->id_jurusan); ?>">
							<button type="button" class="btn btn-dark btn-sm"><i class="fas fa-edit fa-sm"></i></button>
						</a>

						<a href="<?php echo base_url('data_jurusan/delete_jurusan/' . $value->id_jurusan); ?>">
		                  <button type="button" class="btn btn-danger btn-sm btn_del"><i class="fas fa-trash fa-sm"></i></button>
		                </a>
					</td>	
				</tr>
				<?php
					$no++;
					endforeach;

					}else{ ?>
		            <tr><td colspan="7">No Data</td></tr>
		          <?php } ?>
		        </tbody>
			</table>
	<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>		
</div>

