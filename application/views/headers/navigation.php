<style type="text/css">
	.nav{
		margin-top: 30px;
	}
</style>

<nav class="nav">
	<ul>
		<li><a href="<?=base_url('data_anggota');?>" title="">Anggota</a></li>			
		<li><a href="<?=base_url('data_pengarang');?>" title="">Pengarang</a></li>
		<li><a href="<?=base_url('data_penerbit');?>" title="">Penerbit</a></li>
		<li><a href="<?=base_url('data_rak'); ?>" title="">Data Rak</a></li>
		<li><a href="<?=base_url('data_kategori') ?>" title="">Kategori Buku</a></li>
		<li><a href="<?=base_url('data_kelas') ?>" title="">Kelas</a></li>
		<li><a href="<?=base_url('data_akun') ?>" title="">Data Akun</a></li>
		<li><a href="<?=base_url('data_jurusan') ?>" title="">Jurusan</a></li>
		<li><a href="<?=base_url('data_buku\stock_buku');?>" title="">Stock Buku</a></li>
		<li><a href="<?=base_url('data_buku\inventory');?>" title="">Inventory</a></li>
		<li><a href="<?=base_url('data_buku\peminjaman');?>" title="">Peminjaman</a></li>
		<li><a href="<?=base_url('data_penerbit');?>" title="">Pengembalian</a></li>
		<li><a href="<?=base_url('setting'); ?>" title="">Setting</a></li>
		<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
	</ul>
</nav>

<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('data_buku');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Buku</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('data_buku');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Buku</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('data_buku');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Buku</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->