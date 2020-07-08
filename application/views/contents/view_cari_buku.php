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
							      echo form_open(base_url('data_buku/search_buku_cari'), $attributes); 
						    	?>
						   
									<div class="form-group">

										<select name="select_category" class="form-control">
											<option value="0">Semua</option>
											<option value="id_buku">ID Buku</option>
											<option value="isbn">ISBN</option>
											<option value="kode_buku">Kode Buku</option>
											<option value="judul_buku">Judul Buku</option>
											<option value="nama_pengarang">Pengarang</option>
											<option value="nama_penerbit">Penerbit</option>
										</select>

										<input type="text" class="form-control" name="txt_search" placeholder="Search">

										<button type="submit" name="btn_search" class="btn btn-primary"><i class="fas fa-search fa-sm"></i> Search</button>

									</div>

					    		<?php echo form_close(); ?>

					    		<h6 class="m-0 font-weight-bold text-primary">Search Result : <?php echo $result; ?></h6>	
							</div>
						</div>

						<div class="row">
							<div class="col-12">

								<table class="table table-bordered table-hover" border="1">
								<tr>
									<th>#</th>
						            <th>ID Buku</th>
						            <th>ISBN</th>
						            <th>Kode Buku</th>
						            <th>Judul Buku</th>
						            <th>Nama Pengarang</th>
						            <th>Nama Penerbit</th>
						            <th>Stock buku</th>	
						        </tr>

								<?php
									if($buku){
									$no = $no+1;
									foreach ($buku as $value): 
								?>
								<tr id = "table_row_buku" class="table_row_buku" data-id_buku="<?php echo $value->id_buku; ?>" data-kode_buku="<?php echo $value->kode_buku; ?>" data-judul_buku="<?php echo $value->judul_buku; ?>">
									<td><?php echo $no; ?></td>
									<td id="id"><?php echo $value->id_buku; ?></td>
									<td><?php echo $value->isbn; ?></td>
									<td><?php echo $value->kode_buku; ?></td>
									<td id="judul_buku"><?php echo $value->judul_buku; ?></td>	
									<td><?php echo $value->nama_pengarang; ?></td>
									<td><?php echo $value->nama_penerbit; ?></td>
						            <td><?php echo $value->stock_buku; ?></td>	
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