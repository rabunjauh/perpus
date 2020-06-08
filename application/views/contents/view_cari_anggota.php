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
						<?=form_open(base_url() . 'cemployee/search'); ?>
						<div class="form-inline">
							<div class="form-group">
								<select name="selCategory" class="form-control">
									<option value="0">Search By</option>
									<option value="idemployee">Employee ID</option>
									<option value="employeeno">Employee No</option>
									<option value="employeename">Employee Name</option>
									<option value="deptdesc">Department</option>
									<option value="positiondesc">Position</option>
									<option value="code">Company Code</option>
									<option value="extension">Extension</option>
								</select>						
								<input type="text" class="form-control" name="txtSearch" placeholder="Search">
								<button type="submit" name="btnSearch" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>Search</button>
							</div>
						</div>
						<?=form_close(); ?>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
						<table class="table table-bordered" border="1">
						<tr>
							<th>ID Pengarang</th>
							<th>Nama Pengarang</th>
						</tr>

						<?php
						foreach ($anggota as $value): ?>
						<tr id = "table_row" class="table_row_anggota" data-id="<?php echo $value->id_anggota; ?>" data-name="<?php echo $value->nama_anggota; ?>" onclick="kirim('<?php echo $value->id_anggota; ?>',  'anggota')">
							<td id="id"><?php echo $value->id_anggota; ?></td>
							<td id="nama_anggota"><?php echo $value->nama_anggota; ?></td>	
						</tr>
						<?php endforeach ?>
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