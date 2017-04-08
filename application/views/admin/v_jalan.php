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
        <div class="alert alert-success" style="display: none;"></div>
        <?= validation_errors()?>

          <a href="<?php echo base_url('admin/c_jalan/add_jalan') ?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Data Jalan</a>

          <div class="table table-responsive" style="margin-top: 20px;">
            <table class="table table-responsive table-bordered table-striped table-hover" id="tabel_jalan">
              <thead>
                <tr>
                  <td>Nomor</td>
                  <td>Nama Jalan</td>
                  <td>Longitude</td>
                  <td>Latitude</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($data_jalan as $row): ?>
                <tr>
                    <td><?php echo $row['id_jalan'] ?></td>
                    <td><?php echo $row['nama_jalan'] ?></td>
                    <td><?php echo $row['longitude'] ?></td>
                    <td><?php echo $row['latitude'] ?></td>
                    <td>
                      <a href="#" class="btn btn-info btn-flat"><span class="fa fa-pencil"></span></a>
                      <a href="javascript:;" class="btn btn-danger btn-flat"><span class="fa fa-remove"></span></a>
                    </td>
                </tr>
                <?php endforeach ?>
              </tbody>
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
<script type="text/javascript">
    <?php if ($this->session->flashdata('pesan_sukses')): ?>
    $('.alert-success').html('<?php echo $this->session->flashdata('pesan_sukses') ?>').fadeIn().delay(4000).fadeOut('slow');
  <?php endif ?>
</script>