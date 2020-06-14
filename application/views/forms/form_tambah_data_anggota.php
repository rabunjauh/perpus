<div class="row">
	<div class="col-lg-6">
		<div class="card mb-4">	                
  		<div class="card-body">      
				<?php echo validation_errors(); ?>
			
				<?php echo form_open_multipart(base_url('data_anggota/tambah_data_anggota')); ?>
					<div class="form-group">
						<label for="nama_anggota">Nama Anggota :</label>
						<input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota">
					</div>

					<div class="form-group">
						<label for="alamat">No Induk :</label>
						<input type="text" name="no_induk" class="form-control" placeholder="No Induk">
					</div>

					<div class="form-group">
						<label>Jenis Kelamin :</label>
					</div>
					
					<div class="radio-inline"><label for="jenis_kelamin"><input type="radio" name="jenis_kelamin" value="L"> L</label></div>
					<div class="radio-inline"><label for="jenis_kelamin"><input type="radio" name="jenis_kelamin" value="P"> P</label></div>

					<div class="form-group">
						<label for="no_telepon">No Telepon :</label>
						<input type="text" name="no_telepon" class="form-control" placeholder="No Telepon">
					</div>

					<div class="form-group">
						<label for="email">Email :</label>
						<input type="text" name="email" class="form-control" placeholder="Email">
					</div>
				</div>
      </div>
	</div>
			
	<div class="col-lg-6">
		<div class="card mb-4">
      <div class="card-body">	                  
				<div class="form-group">
					<label for="kelas">Kelas :</label>
					<select name="kelas" id="kelas" class="form-control">	
					<option value="">Kelas</option>					
						<?php foreach ($kelas as $kls): ?>
							<option value="<?php echo $kls->id_kelas; ?>"><?php echo $kls->kelas; ?></option>
						<?php endforeach ?>
					</select>
				</div>

				<div class="form-group">
					<label for="jurusan" >Jurusan :</label>
					<select name="jurusan" id="jurusan" class="form-control">
							<option value="">Jurusan</option>
						<?php foreach($jurusan as $jrsn): ?>
							<option value="<?php echo $jrsn->id_jurusan; ?>"><?php echo $jrsn->jurusan; ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<label for="jurusan" >Tanggal Daftar :</label>
					<input type="text" readonly name="tanggal_daftar" class="form-control tanggal_daftar" required placeholder="Tanggal Daftar" data-date-format="yyyy-mm-dd">
				</div>

			
				<!-- <div class="form-group">
					<label for="photo">Photo :</label>
					<input type="file" name="photo" class="form-control" onchange="preview()">
					<img src="" alt="" id="output_image">
				</div> -->
			</div>
    </div>		
	</div>
</div>

<div class="row">
	<div class="col-lg-3">	
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-icon-split" name="button_tambah_anggota">
		        <span class="icon text-white-50"><i class="fas fa-save"></i></span>
		        <span class="text">Save</span>
      		</button>

      		<button type="reset" class="btn btn-warning btn-icon-split btn_reset" name="button_reset">
        		<span class="icon text-white-50"><i class="fas fa-undo"></i></span>
        		<span class="text">Reset</span>
      		</button>
		</div>		
	</div>	

<?php echo form_close(); ?>	
	<div class="col-lg-9 text-right">
		<a href="<?= base_url('data_anggota') ?>" class="btn btn-info btn-icon-split btn_back">
    <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
    <span class="text">Back</span>
  </a>	
	</div>
</div>
