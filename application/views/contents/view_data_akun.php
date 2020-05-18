<div class="card shadow mb-4">
  <div class="card-header py-3">
<?php if($this->session->userdata('role') === "1"): ?>
  <a href="<?php echo base_url('data_akun/tambah_data_akun'); ?>" class="btn btn-primary btn-lg">Tambah Data Akun</a>

  <?php 
  $attributes = array('class' => 'd-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search');
  echo form_open(base_url('data_akun/search_akun'), $attributes); ?>
  <div class="input-group">
    <div class="form-group">
      <label>Search by : </label>
      <select name="select_category" class="form-control">
        <option value="0">Cari berdasarkan.. (Def: Semua)</option>
        <option value="id_akun">ID Akun</option>
        <option value="nama_lengkap">Nama Lengkap</option>
        <option value="no_induk">No Induk</option>
        <option value="phone">No Handphone</option>
        <option value="username">Username</option>
        <option value="role">Role</option>
        <option value="created_date">Created Date</option>
      </select>           
      <input type="text" class="form-control" name="txt_search" placeholder="Search">
      <button type="submit" name="btn_search" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>Search</button>
    </div>
  </div>  
  <?php
    echo form_close(); 
    endif; 
  ?>

  <h6 class="m-0 font-weight-bold text-primary">Search Result : <?php echo $result; ?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>ID Akun</th>
            <th>Nama Lengkap</th>
            <th>No Induk</th>
            <th>No Handphone</th>
            <th>Username</th>
            <th>Role</th>
            <th>Created Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>#</th>
            <th>ID Akun</th>
            <th>Nama Lengkap</th>
            <th>No Induk</th>
            <th>No Handphone</th>
            <th>Username</th>
            <th>Role</th>
            <th>Created Date</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php if($akun){ 
            $no = $no+1;
            foreach ($akun as $value): 
          ?>

          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $value->id_akun; ?></td>
            <td><?php echo $value->nama_lengkap; ?></td>
            <td><?php echo $value->no_induk; ?></td>
            <td><?php echo $value->phone; ?></td>           
            <td><?php echo $value->username; ?></td>
            <td><?php echo $value->role; ?></td>
            <td><?php echo $value->created_date; ?></td>
            <td>
              <?php if($this->session->userdata('role') === '1'): ?>
                <a href="<?php echo base_url('data_akun/edit_data_akun/' . $value->id_akun); ?>">
                  <button type="button" class="btn btn-default btn-xs"> Edit</button>
                </a>
                <a href="<?php echo base_url('data_akun/reset_password/' . $value->id_akun); ?>">
                  <button type="button" class="btn btn-warning btn-xs"> Reset Password</button>
                </a>
                <a href="<?php echo base_url('data_akun/delete_akun/' . $value->id_akun); ?>">
                  <button type="button" class="btn btn-danger btn-xs"> Delete</button>
                </a>

              <?php else: ?>  
                <a href="<?php echo base_url('data_akun/edit_data_akun/' . $value->id_akun); ?>">
                  <button type="button" class="btn btn-info btn-xs"> Edit</button>
                </a>

                <a href="<?php echo base_url('data_akun/change_password/' . $value->id_akun); ?>" onclick="return confirm('Are you sure you want to delete this data?')">
                  <button type="button" class="btn btn-primary btn-xs"> Change Password</button>
                </a>

              <?php endif; ?> 
            </td> 
          </tr>

          <?php
            $no++;
            endforeach 
          ?>
          <?php }else{ ?>
            <tr><td colspan="7">No Data</td></tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php echo $this->pagination->create_links(); ?>
</div>