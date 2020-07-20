<div class="row">
	<div class="col-lg-7">
		<div class="card mb-4">
			<div class="card-body">
				<?php echo validation_errors(); ?>

				<?php 
					if(!$setting){

					echo form_open(base_url('setting')); 
				?>

					<div class="form-group">
						<label for="idsetting">ID Pengaturan :</label>
						<input type="text" name="idsetting" class="form-control" placeholder="ID Pengaturan" disabled>
					</div>

					<div class="form-group">
						<label for="nama_sekolah">Nama Sekolah :</label>
						<input type="text" name="nama_sekolah" class="form-control"  placeholder="Nama Sekolah" required>
					</div>

					<div class="form-group">
						<label for="alamat">Alamat :</label>
						<input type="text" name="alamat" class="form-control"  placeholder="Alamat" required>
					</div>

					<div class="form-group">
						<label for="email">Email :</label>
						<input type="text" name="email" class="form-control"  placeholder="Email" required>
					</div>
			</div>
		</div>
	</div>

	<div class="col-lg-5">
		<div class="card mb-4">
			<div class="card-body">
					<div class="form-group">
						<label for="lama_pinjam">Maksimal lama pinjam :</label>
						<div class="input-group">
	      					<input type="text" name="lama_pinjam" class="form-control" placeholder="Maksimal lama pinjam" aria-label="Maksimal lama pinjam" aria-describedby="basic-addon1" required>
	      					<div class="input-group-append">
	        					<span class="input-group-text" id="basic-addon1">Hari</span>
	      					</div>
	    				</div>
    				</div>

					<div class="form-group">
						<label for="jumlah_max">Jumlah maksimal pinjaman :</label>
						<div class="input-group">
	      					<input type="text" name="jumlah_max" class="form-control" placeholder="Jumlah maksimal pinjaman" aria-label="Jumlah maksimal pinjaman" aria-describedby="basic-addon1" required>
	      					<div class="input-group-append">
	        					<span class="input-group-text" id="basic-addon1">Buah</span>
	      					</div>
	    				</div>
    				</div> 

					<div class="form-group">
						<label for="denda">Denda keterlambatan per hari :</label>
						<div class="input-group">
	      					<div class="input-group-prepend">
	        					<span class="input-group-text" id="basic-addon1">Rp.</span>
	      					</div>
	      					<input type="text" name="denda" class="form-control" placeholder="Denda keterlambatan per hari" aria-label="Denda keterlambatan per hari" aria-describedby="basic-addon1" required>
	    				</div>
    				</div> 

					<div class="form-group">
						<label for="perpanjangan">Jumlah perpanjangan :</label>
						<div class="input-group">
      						<input type="text" name="perpanjangan" class="form-control" placeholder="Jumlah perpanjangan" aria-label="Jumlah perpanjangan" aria-describedby="basic-addon1" required>
							<div class="input-group-append">
	        					<span class="input-group-text" id="basic-addon1">Kali</span>
	      					</div>
      					</div>
    				</div> 
    			<?php 
    				}else{ 
    					echo form_open(base_url('setting/index/' . $setting->idsetting)); 
				?>

					<div class="form-group">
						<label for="idsetting">ID Pengaturan :</label>
						<input type="text" name="idsetting" value="<?= $setting->idsetting ?>" class="form-control" placeholder="ID Pengaturan" disabled>
					</div>

					<div class="form-group">
						<label for="nama_sekolah">Nama Sekolah :</label>
						<input type="text" name="nama_sekolah" value="<?= $setting->nama_sekolah ?>" class="form-control"  placeholder="Nama Sekolah" required>
					</div>

					<div class="form-group">
						<label for="alamat">Alamat :</label>
						<input type="text" name="alamat" value="<?= $setting->alamat ?>" class="form-control"  placeholder="Alamat" required>
					</div>

					<div class="form-group">
						<label for="email">Email :</label>
						<input type="text" name="email" value="<?= $setting->email ?>" class="form-control"  placeholder="Email" required>
					</div>
			</div>
		</div>
	</div>

	<div class="col-lg-5">
		<div class="card mb-4">
			<div class="card-body">
				<div class="form-group">
					<label for="lama_pinjam">Maksimal lama pinjam :</label>
					<div class="input-group">
      					<input type="text" name="lama_pinjam" value="<?= $setting->lama_pinjam ?>" class="form-control" placeholder="Maksimal lama pinjam" aria-label="Maksimal lama pinjam" aria-describedby="basic-addon1" required>
      					<div class="input-group-append">
        					<span class="input-group-text" id="basic-addon1">Hari</span>
      					</div>
    				</div>
				</div>

				<div class="form-group">
					<label for="jumlah_max">Jumlah maksimal pinjaman :</label>
					<div class="input-group">
      					<input type="text" name="jumlah_max" value="<?= $setting->jumlah_max ?>" class="form-control" placeholder="Jumlah maksimal pinjaman" aria-label="Jumlah maksimal pinjaman" aria-describedby="basic-addon1" required>
      					<div class="input-group-append">
        					<span class="input-group-text" id="basic-addon1">Buah</span>
      					</div>
    				</div>
				</div> 

				<div class="form-group">
					<label for="denda">Denda keterlambatan per hari :</label>
					<div class="input-group">
      					<div class="input-group-prepend">
        					<span class="input-group-text" id="basic-addon1">Rp.</span>
      					</div>
      					<input type="text" name="denda" value="<?= $setting->lateCharge ?>" class="form-control" placeholder="Denda keterlambatan per hari" aria-label="Denda keterlambatan per hari" aria-describedby="basic-addon1" required>
    				</div>
				</div> 

				<div class="form-group">
					<label for="perpanjangan">Jumlah perpanjangan :</label>
					<div class="input-group">
  						<input type="text" name="perpanjangan" value="<?= $setting->perpanjangan ?>" class="form-control" placeholder="Jumlah perpanjangan" aria-label="Jumlah perpanjangan" aria-describedby="basic-addon1" required>
  						<div class="input-group-append">
        					<span class="input-group-text" id="basic-addon1">Kali</span>
      					</div>
  					</div>
				</div> 
			<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-icon-split" name="button_save_setting">
	     		<span class="icon text-white-50"><i class="fas fa-save"></i></span>
	      		<span class="text">Save</span>
    		</button>
		</div>		
	</div>	
	<?php
		echo form_close(); 
		
	?>
	<div class="col-lg-9 text-right">
		<a href="<?= base_url('data_rak') ?>" class="btn btn-info btn-icon-split btn_back">
		  	<span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		  	<span class="text">Back</span>
		</a>	
	</div>		
</div>