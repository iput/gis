  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Aset Jalan Potensi Macet</h3>
        </div>
        <div class="box-body">
          <a href="<?php echo base_url('admin/c_jalan/add_jalan') ?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Data Jalan</a>

          <div class="table table-responsive" style="margin-top: 20px;">
            <table class="table table-responsive table-bordered table-striped table-hover" id="tabel_jalan">
              <thead>
                <tr>
                  <td>Nomor</td>
                  <td>Nama Jalan</td>
                  <td>Longitude</td>
                  <td>Latitude</td>
                  <td>Kondisi Keramaian</td>
                  <td>Aksi</td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->