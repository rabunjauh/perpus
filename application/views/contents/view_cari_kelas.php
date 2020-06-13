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
	          		<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
							<?php  
							      $attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
							      echo form_open(base_url('data_kelas/search_kelas_cari'), $attributes); 
						    	?>
							<div class="form-group">
								<label>Cari Berdasarkan : </label>
								<select name="select_category" class="form-control">
									<option value="0">Semua</option>
									<option value="id_kelas">ID Kelas</option>
									<option value="kelas">Kelas</option>
								</select>						
								<input type="text" class="form-control" name="txt_search" placeholder="Search">
					        	<button type="submit" name="btn_search" class="btn btn-primary"><i class="fas fa-search fa-sm"></i> Search</button>
							</div>
							<?=form_close(); ?>
							<h6 class="m-0 font-weight-bold text-primary">Search Result : <?php echo $result; ?></h6>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
									<tr>
										<th>ID Kelas</th>
										<th>Kelas</th>
									</tr>

									<?php
										if($kelas){
			            				$no = $no+1;
										foreach ($kelas as $value): 
									?>
									<tr class="table_row_kelas" data-id="<?php echo $value->id_kelas; ?>" data-name="<?php echo $value->kelas; ?>">
										<td><?php echo $value->id_kelas; ?></td>
										<td><?php echo $value->kelas; ?></td>	
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