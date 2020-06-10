<div class="card shadow mb-4">
    <div class="card-header py-3">
    <?php  
      $attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
      echo form_open(base_url('data_anggota/search_anggota'), $attributes); 
    ?>
   
      <div class="form-group">
        <label>Cari berdasarkan : </label>
        <select name="select_category" class="form-control">
          <option value="0">Semua</option>
          <option value="id_anggota">ID Anggota</option>
            <option value="nama_anggota">Nama Anggota</option>
            <option value="no_induk">No Induk</option>
            <option value="jenis_kelamin">Jenis Kelamin</option>
            <option value="kelas">Kelas</option>
            <option value="jurusan">Jurusan</option>
            <option value="no_telepon">No Handphone</option>
            <option value="email">Email</option>
            <option value="tanggal_daftar">Tanggal Daftar</option>
            <option value="tanggal_input">Tanggal Input</option>
        </select>           
        <input type="text" class="form-control" name="txt_search" placeholder="Search">
        <button type="submit" name="btn_search" class="btn btn-primary"><i class="fas fa-search fa-sm"></i> Search</button>
      </div>
    <?php echo form_close(); ?>    

    <h6 class="m-0 font-weight-bold text-primary">Search Result : <?php echo $result; ?></h6>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>Nama Anggota</th>
            <th>No Induk</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Input</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>Nama Anggota</th>
            <th>No Induk</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Input</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            if($anggota){
            $no = $no+1;
            foreach ($anggota as $value): 
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $value->id_anggota; ?></td>
            <td><?php echo $value->nama_anggota; ?></td>
            <td><?php echo $value->no_induk; ?></td>
            <td><?php echo $value->jenis_kelamin; ?></td>
            <td><?php echo $value->kelas; ?></td>
            <td><?php echo $value->jurusan; ?></td>
            <td><?php echo $value->no_telepon; ?></td>
            <td><?php echo $value->email; ?></td>     
            <td><?php echo $value->tanggal_daftar; ?></td>      
            <td><?php echo $value->tanggal_input; ?></td>     
            <td><img src="<?php echo base_url('assets/images/' . $value->photo .'.jpg'); ?>" alt="photo"></td>      
            <td>
              <a href="<?php echo base_url('data_anggota/edit_data_anggota/' . $value->id_anggota); ?>">
                <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-edit fa-sm"></i></button>
              </a>
              <a href="<?php echo base_url('data_anggota/delete_anggota/' . $value->id_anggota); ?>">
                <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash fa-sm"></i></button>
              </a>
            </td> 
          </tr>
          <?php $no++; ?>
          <?php endforeach ?>
          <?php }else{ ?>
            <tr><td colspan="7">No Data</td></tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  <?php echo $this->pagination->create_links(); ?>
  </div>
</div>