<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>


<div class="container box">	
	<div class="row">
		<div class="col-lg-6">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">			
			<a href="<?php echo base_url('data_pengarang/tambah_data_pengarang'); ?>" class="btn btn-primary btn-lg">Tambah Data Pengarang</a>
		</div>
	</div>
	<div class="row">
	<p></p>	
	</div>
	<div class="row">
		<div class="col-lg-12">
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
	<br>
	<div class="row">
		<div class="col-lg-12">
		<table class="table table-bordered" border="1">
		<tr>
			<th>ID Pengarang</th>
			<th>Nama Pengarang</th>
		</tr>

		<?php
		foreach ($pengarang as $value): ?>
		<tr class="table_row" data-id="<?php echo $value->id_pengarang; ?>" data-name="<?php echo $value->nama_pengarang; ?>" onclick="kirim('<?php echo $value->id_pengarang - 1; ?>',  '<?php echo  $value->desc;?>')">
			<td><?php echo $value->id_pengarang; ?></td>
			<td><?php echo $value->nama_pengarang; ?></td>	
		</tr>
		<?php endforeach ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	</div>		
</div>	
<!-- comment -->
</body>
</html>
<?php echo $footer; ?>