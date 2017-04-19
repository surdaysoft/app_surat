<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>User</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/manage_user">Manage User</a></li>
              <li class="active">Edit</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Edit User</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_user'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="user" value="<?php echo $data->username; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Masukkan password baru" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>" />
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->id_user ?>">
                  <input type="hidden" name="pass_old" value="<?php echo $data->password ?>">
                  <a href="<?php echo base_url(); ?>admin/manage_user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>