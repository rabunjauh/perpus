<style type="text/css">
	.nav{
		margin-top: 30px;
	}
</style>

<nav class="nav">
	<ul>
		<li><a href="<?=base_url('data_buku'); ?>" title="">Buku</a></li>
		<li><a href="<?=base_url('data_anggota');?>" title="">Anggota</a></li>			
		<li><a href="<?=base_url('data_pengarang');?>" title="">Pengarang</a></li>
		<li><a href="<?=base_url('data_penerbit');?>" title="">Penerbit</a></li>
		<li><a href="<?=base_url('data_rak'); ?>" title="">Data Rak</a></li>
		<li><a href="<?=base_url('data_kategori') ?>" title="">Kategori Buku</a></li>
		<li><a href="<?=base_url('data_kelas') ?>" title="">Kelas</a></li>
		<li><a href="<?=base_url('data_jurusan') ?>" title="">Jurusan</a></li>
		<li><a href="<?=base_url('data_buku\stock_buku');?>" title="">Stock Buku</a></li>
		<li><a href="<?=base_url('data_buku\inventory');?>" title="">Inventory</a></li>
		<li><a href="<?=base_url('data_buku\peminjaman');?>" title="">Peminjaman</a></li>
		<li><a href="<?=base_url('data_penerbit');?>" title="">Pengembalian</a></li>
		<li><a href="<?=base_url('setting'); ?>" title="">Setting</a></li>
		<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
	</ul>
</nav>