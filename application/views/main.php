<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan - <?php echo $title; ?></title>
	<style type="text/css">
		.box{
			font-size: 12px;
		}
		button{
			margin-top: 10px!important;
		}
		
		img{
			margin-top: 10px;
		}
	</style>
	<!-- Header -->
	<?php echo $header; ?>
	<!-- /Header -->
	
</head>
<body>
	note : <br>
	- <strong>username : admin , password : 1234</strong> <br>
	- validation form tambah data buku tahun terbit ganti format menjadi tahun saja <br>
	- validation isbn <br>
	- buat restrict hapus data yg jadi parent atau reference pada tabel lain (foreign key) <br>
	- register anggota verifikasi lewat email kirim link ke email<br>
	- reset password <br>
	- modify function update stock buku inventory, peminjaman dan pengembalian jadikan 1 function pada model <br>
	-buat history log pada buku dipinjam oleh siapa pada tanggal berapa kembali kapan status dll
	<!-- Container -->
	<div class="container" style="width: 100%;">
		<div class="row text-center">
		</div>
		<!-- Navigation -->
		<div class="row">
			<?php 
				if ( isset($navigation) ){
						echo $navigation;  
				}else{
					echo '';
				}?>

		</div>
		<!-- /Navigation -->
		<div id="note" class="text-center">
        	<?php 
        		if ( $this->session->flashdata('message') ) {
        			echo $this->session->flashdata('message');
        		} 
        		else{
        			echo '';
        		}

        		// if else ternary ($this->session->flashdata('message')) ? $this->session->flashdata('message') : '';
        	?>      
        </div>
		<!-- Content -->
		<div class="content">
			<?php echo $content; ?>
		</div>
		<!-- /Content -->

		<!-- Footer -->
		<div style="margin-bottom:50px;">
			<?php echo $footer; ?>
		</div>
		<!-- /Footer -->
		
	</div>
	<!-- /Container -->
</body>
</html>

