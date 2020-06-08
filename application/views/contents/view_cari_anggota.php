<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perpustakaan - <?php echo $title; ?></title>

  <!-- Header -->
	<?php echo $header; ?>
	<!-- /Header -->

</head>
	
<body id="page-top">

<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

					<div class="row">
						<div class="col-12">
							<?php  
						      $attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
						      echo form_open(base_url('data_anggota/search_anggota_cari'), $attributes); 
					    	?>
					   
					      <div class="form-group">
					        <label>Cari berdasarkan : </label>
					        <select name="select_category" class="form-control">
					          <option value="0">Semua</option>
					          <option value="id_anggota">ID Anggota</option>
					            <option value="nama_anggota">Nama Anggota</option>
					            <option value="no_induk">No Induk</option>
					            <option value="jenis_kelamin">Jenis Kelamin</option>
					            <option value="kelas">Kelas</option>
					            <option value="jurusan">Jurusan</option>
					            <<!-- option value="no_telepon">No Handphone</option>
					            <option value="email">Email</option>
					            <option value="tanggal_daftar">Tanggal Daftar</option>
					            <option value="tanggal_input">Tanggal Input</option> -->
					        </select>           
					        <input type="text" class="form-control" name="txt_search" placeholder="Search">
					        <button type="submit" name="btn_search" class="btn btn-primary"><i class="fas fa-search fa-sm"></i> Search</button>
					      </div>
					    		<?php echo form_close(); ?>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
						<table class="table table-bordered table-hover" border="1">
						<tr>
							<th>ID Anggota</th>
							<th>Nama Anggota</th>
							<th>No Induk</th>
							<th>Jenis Kelamin</th>
							<th>Kelas</th>
							<th>Jurusan</th>
						</tr>

						<?php
							if($anggota){
            				$no = $no+1;
							foreach ($anggota as $value): 
						?>
						<tr id = "table_row" class="table_row_anggota" data-id="<?php echo $value->id_anggota; ?>" data-name="<?php echo $value->nama_anggota; ?>">
							<td id="id"><?php echo $value->id_anggota; ?></td>
							<td id="nama_anggota"><?php echo $value->nama_anggota; ?></td>	
							<td><?php echo $value->no_induk; ?></td>	
							<td><?php echo $value->jenis_kelamin; ?></td>	
							<td><?php echo $value->kelas; ?></td>	
							<td><?php echo $value->jurusan; ?></td>		
						</tr>
						<?php $no++; ?>
						<?php endforeach ?>
						<?php }else{ ?>
			            	<tr><td colspan="7">No Data</td></tr>
			         	<?php } ?>
					</table>
					<?php echo $this->pagination->create_links(); ?>
					</div>
					</div>		
				<!-- comment -->
				</div>
	      <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span><?php echo $footer; ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
</body>
</html>