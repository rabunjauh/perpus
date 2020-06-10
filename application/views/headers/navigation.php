<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('data_buku') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistem Perpustakaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Books -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('data_buku');?>" data-toggle="collapse" data-target="#collapse_book" aria-expanded="true" aria-controls="collapse_book">
          <i class="fas fa-fw fa-book"></i>
          <span>Buku</span>
        </a>

        <div id="collapse_book" class="collapse" aria-labelledby="collapse_book" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu buku:</h6>
            <a class="collapse-item" href="<?php echo base_url('data_buku'); ?>">Data Buku</a>

            <a class="collapse-item" href="<?php echo base_url('data_buku/tambah_data_buku'); ?>">Tambah Data Buku
            </a>

            <a class="collapse-item" href="<?php echo base_url('data_buku/data_kategori'); ?>">Kategori Buku
            </a>

            <a class="collapse-item" href="<?php echo base_url('data_buku/stock_buku'); ?>">Stok Buku
            </a>

            <a class="collapse-item" href="<?php echo base_url('data_buku/inventory'); ?>">Inventori Buku
            </a>

             <a class="collapse-item" href="<?php echo base_url('data_buku/peminjaman'); ?>">Data Peminjaman
            </a> 

            <a class="collapse-item" href="<?php echo base_url('data_buku/peminjaman_baru'); ?>">Form Peminjaman
            </a> 

             <a class="collapse-item" href="<?php echo base_url('data_buku/pengembalian'); ?>">Pengembalian
            </a>     
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Member -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('data_anggota');?>" data-toggle="collapse" data-target="#collapse_member" aria-expanded="true" aria-controls="collapse_member">
          <i class="fas fa-fw fa-user"></i>
          <span>Anggota</span>
        </a>

        <div id="collapse_member" class="collapse" aria-labelledby="collapse_member" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu anggota:</h6>
            <a class="collapse-item" href="<?php echo base_url('data_anggota'); ?>">Data Anggota</a>

            <a class="collapse-item" href="<?php echo base_url('data_anggota/tambah_data_anggota'); ?>">Tambah Data Anggota
            </a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('data_pengarang');?>" data-toggle="collapse" data-target="#collapse_author" aria-expanded="true" aria-controls="collapse_author">
          <i class="fas fa-fw fa-pen"></i>
          <span>Pengarang</span>
        </a>

        <div id="collapse_author" class="collapse" aria-labelledby="collapse_author" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu pengarang:</h6>
            <a class="collapse-item" href="<?php echo base_url('data_pengarang'); ?>">Data Pengarang</a>
            <a class="collapse-item" href="<?php echo base_url('data_pengarang/tambah_data_pengarang'); ?>">Tambah Data Pengarang</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('penerbit');?>" data-toggle="collapse" data-target="#collapse_publisher" aria-expanded="true" aria-controls="collapse_publisher">
          <i class="fas fa-fw fa-cog"></i>
          <span>Penerbit</span>
        </a>

        <div id="collapse_publisher" class="collapse" aria-labelledby="collapse_publisher" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu pengarang:</h6>
            <a class="collapse-item" href="<?php echo base_url('data_penerbit'); ?>">Data Penerbit</a>
            <a class="collapse-item" href="<?php echo base_url('data_penerbit/tambah_data_penerbit'); ?>">Tambah Data Penerbit</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('data_rak');?>">
          <i class="fas fa-fw fa-bars"></i>
          <span>Data Rak</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('data_kelas');?>">
          <span>Kelas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('data_akun');?>" data-toggle="collapse" data-target="#collapse_account" aria-expanded="true" aria-controls="collapse_account">
          <i class="fas fa-fw fa-cog"></i>
          <span>Akun</span>
        </a>

        <div id="collapse_account" class="collapse" aria-labelledby="collapse_account" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu akun:</h6>
            <a class="collapse-item" href="<?php echo base_url('data_akun'); ?>">Data Akun</a>
            <?php if($this->session->userdata('role') === "1"): ?>
              <a class="collapse-item" href="<?php echo base_url('data_akun/tambah_data_akun'); ?>">Tambah Data Akun</a>
            <?php endif; ?>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('data_jurusan');?>">
          <span>Jurusan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('data_akun');?>">
          <span>Setting</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

     <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->