<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Surat Keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_keluar">Surat Keluar</a></li>
              <li class="active">Tambah</li>
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
                <h3 class="box-title">Form Data Tambah Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_surat_keluar'); ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Surat</label>
                      <select name="jenis" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_jenis_surat")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_surat)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no" placeholder="No Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Surat</label>
                      <input type="text" class="form-control" name="tgl" id="tgl_surat" data-date-format="yyyy-mm-dd" placeholder="Tgl Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Untuk</label>
                      <input type="text" class="form-control" name="untuk" placeholder="Untuk"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                      <input type="text" class="form-control" name="perihal" placeholder="Perihal"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea name="ket" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/surat_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>