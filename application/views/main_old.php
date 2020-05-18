<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan - <?php echo $title; ?></title>
	<style type="text/css">
		.box{
			font-size: 12px;
		}
		button{
			margin: 2px!important;
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

