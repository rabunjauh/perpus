<div class="container box">	
	<div class="row">
		<div class="col-lg-6">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">			
			<a href="<?php echo base_url('data_buku/tambah_data_buku'); ?>" class="btn btn-primary btn-lg">Tambah Data Buku</a>
		</div>
	</div>	
	<div class="row">
		<div class="col-lg-12">
		<?=form_open(base_url('data_buku/search_buku')); ?>
		<div class="form-inline">
			<div class="form-group">
				<label>Cari Berdasarkan :</label>
				<select name="select_category" class="form-control">
					<option value="0">Semua kategori</option>
					<option value="id_buku">ID Buku</option>
					<option value="isbn">ISBN</option>
					<option value="judul_buku">Judul Buku</option>
					<option value="nama_pengarang">Pengarang</option>
					<option value="nama_penerbit">Penerbit</option>
					<option value="tahun_terbit">Tahun Terbit</option>
					<option value="kode_rak">Kode Rak</option>
				</select>						
				<input type="text" class="form-control" name="txt_search" placeholder="Search">
				<button type="submit" name="btn_search" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>Search</button>
			</div>
		</div>
		<?=form_close(); ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-12">
			<h4>Search Result : <?php echo $result; ?> </h4>
		<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>ISBN</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
			<th>Keterangan</th>
			<th>Kode Rak</th>
			<th>Aksi</th>
		</tr>

		<?php
		$no = 1;
		foreach ($books as $book): ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $book->id_buku; ?></td>
			<td><?php echo $book->isbn; ?></td>
			<td><?php echo $book->judul_buku; ?></td>			
			<td><?php echo $book->nama_pengarang; ?></td>
			<td><?php echo $book->nama_penerbit; ?></td>
			<td><?php echo $book->tahun_terbit; ?></td>
			<td><?php echo $book->keterangan; ?></td>
			<td><?php echo $book->kode_rak; ?></td>
			
			<td>
				<a href="<?php echo base_url('data_buku/edit_data_buku/') . $book->id_buku; ?>">
					<button type="button" class="btn btn-info btn-xs"> Edit</button>
				</a>

				<a href="<?php echo base_url('data_buku/delete_data_buku/') . $book->id_buku; ?>">
					<button type="button" class="btn btn-danger btn-xs"> Delete</button>
				</a>
			</td>	
		</tr>
		<?php $no++; ?>
		<?php endforeach ?>
	</table>
	</div>
	</div>

	<div class="row">
		<div class="col-lg-12 text-center">
			<?php echo $this->pagination->create_links(); ?>
		</div>		
	</div>		
</div>	