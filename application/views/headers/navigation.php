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

            <a class="collapse-item" href="<?php echo base_url('data_buku/tambah_inventory_buku'); ?>">Tambah Inventori Buku
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
          <i class="fas fa-fw fa-users"></i>
          <span>Anggota</span>
        </a>

        <div id="collapse_member" class="collapse" aria-labelledby="collapse_member" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu anggota :</h6>
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
            <h6 class="collapse-header">Sub menu pengarang :</h6>
            <a class="collapse-item" href="<?php echo base_url('data_pengarang'); ?>">Data Pengarang</a>
            <a class="collapse-item" href="<?php echo base_url('data_pengarang/tambah_data_pengarang'); ?>">Tambah Data Pengarang</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('penerbit');?>" data-toggle="collapse" data-target="#collapse_publisher" aria-expanded="true" aria-controls="collapse_publisher">
          <i class="fas fa-fw fa-plus"></i>
          <span>Penerbit</span>
        </a>

        <div id="collapse_publisher" class="collapse" aria-labelledby="collapse_publisher" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu penerbit :</h6>
            <a class="collapse-item" href="<?php echo base_url('data_penerbit'); ?>">Data Penerbit</a>
            <a class="collapse-item" href="<?php echo base_url('data_penerbit/tambah_data_penerbit'); ?>">Tambah Data Penerbit</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('rak');?>" data-toggle="collapse" data-target="#collapse_bookshelf" aria-expanded="true" aria-controls="collapse_bookshelf">
          <i class="fas fa-fw fa-bars"></i>
          <span>Rak</span>
        </a>

        <div id="collapse_bookshelf" class="collapse" aria-labelledby="collapse_bookshelf" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu rak :</h6>
            <a class="collapse-item" href="<?php echo base_url('data_rak'); ?>">Data Rak</a>
            <a class="collapse-item" href="<?php echo base_url('data_rak/tambah_data_rak'); ?>">Tambah Data Rak</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('kelas');?>" data-toggle="collapse" data-target="#collapse_classes" aria-expanded="true" aria-controls="collapse_classes">
          <i class="fas fa-fw fa-plus"></i>
          <span>Kelas</span>
        </a>

        <div id="collapse_classes" class="collapse" aria-labelledby="collapse_classes" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu kelas :</h6>
            <a class="collapse-item" href="<?php echo base_url('data_kelas'); ?>">Data Kelas</a>
            <a class="collapse-item" href="<?php echo base_url('data_kelas/tambah_data_kelas'); ?>">Tambah Data Kelas</a>
          </div>
        </div>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('jurusan');?>" data-toggle="collapse" data-target="#collapse_divisions" aria-expanded="true" aria-controls="collapse_divisions">
          <i class="fas fa-fw fa-plus"></i>
          <span>Jurusan</span>
        </a>

        <div id="collapse_divisions" class="collapse" aria-labelledby="collapse_divisions" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu jurusan :</h6>
            <a class="collapse-item" href="<?php echo base_url('data_jurusan'); ?>">Data Jurusan</a>
            <a class="collapse-item" href="<?php echo base_url('data_jurusan/tambah_data_jurusan'); ?>">Tambah Data Jurusan</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('data_akun');?>" data-toggle="collapse" data-target="#collapse_account" aria-expanded="true" aria-controls="collapse_account">
          <i class="fas fa-fw fa-user"></i>
          <span>Akun</span>
        </a>

        <div id="collapse_account" class="collapse" aria-labelledby="collapse_account" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu akun :</h6>
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
        <a class="nav-link" href="<?=base_url('setting');?>">
          <i class="fas fa-fw fa-cog"></i>
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