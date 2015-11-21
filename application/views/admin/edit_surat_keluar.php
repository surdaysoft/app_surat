<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Surat Keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_keluar">Surat Keluar</a></li>
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
                <h3 class="box-title">Form Data Edit Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_surat_keluar'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Surat</label>
                      <select name="jenis" class="form-control">
                        <?php
                        $l_jenis = $this->db->query("SELECT * FROM tb_jenis_surat")->result();
                        
                        if (empty($l_jenis)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($l_jenis as $l_jenis_surat){
                        ?>
                       <option <?php if( $data->jenis_id == $l_jenis_surat->jenis_id) {echo "selected"; } ?> value='<?php echo $l_jenis_surat->jenis_id ;?>'><?php echo $l_jenis_surat->jenis_surat ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no" value="<?php echo $data->no_surat ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Surat</label>
                      <input type="text" class="form-control" name="tgl" id="tgl_surat" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_surat ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Untuk</label>
                      <input type="text" class="form-control" name="untuk" value="<?php echo $data->untuk ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                      <input type="text" class="form-control" name="perihal" value="<?php echo $data->perihal ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea name="ket" class="form-control" cols="30" rows="10"><?php echo $data->ket ?></textarea>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->surat_id ?>">
                  <a href="<?php echo base_url(); ?>admin/surat_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>