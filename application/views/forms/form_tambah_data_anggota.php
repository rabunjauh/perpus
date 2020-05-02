<div class="container box">
	<div class="row">
		<h3><?php echo $title; ?></h3>
	</div>

	<div class="row">
		<div class="col-lg-6">
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
					<label for="no_telepon">No Telepon :</label>
					<input type="text" name="no_telepon" class="form-control" placeholder="No Telepon">
				</div>

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
		</div>
				
		<div class="col-lg-6">	
				<div class="form-group">
					<label for="photo">Photo :</label>
					<input type="file" name="photo" class="form-control" onchange="preview()">
					<img src="" alt="" id="output_image">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="button_tambah_anggota"><li class="glyphicon glyphicon-floppy-disk"></li> Save</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>