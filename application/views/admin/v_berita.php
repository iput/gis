<div class ="content-wrapper">
	<section class="content">
		<div class="box">
		<div class="box-header with-border">
		<h3 class="box-title">Berita terkini</h3>
		</div>
		<div class="box-body">
		<div class="alert alert-success" style="display: none;"></div>
		<a href="<?php echo base_url('admin/c_berita/beritaBaru') ?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Berita Baru</a>

    <table class="table table-striped">
      <thead>
        <tr>
          <td>Konten</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($berita as $rows): ?>
          <tr>
          <td>
          <div class="col-md-10">
          <div class="box box-success box-solid">
            <input type="hidden" name="id_berita" value="<?= $rows['id_berita']?>">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $rows['judul_berita'] ?></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                <dt>Diupdate&nbsp; <?php echo date('d F Y', strtotime($rows['waktu_input']))?></dt>
                <dd>Identitas Penulis</dd>
                <dt><?php echo $rows['penulis']; ?></dt>
                <dt><?php echo $rows['email'] ?></dt>
                <dt><?php echo $rows['no_hp'] ?></dt>
                <dd class="text text-justify"><?php echo $rows['isi_berita']; ?></dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
          <!-- /.box -->
          </td>
          <td>
            <a href="<?php echo base_url('admin/c_berita/editBerita/'.$rows['id_berita'])?>">&nbsp;<span class="glyphicon glyphicon-pencil"></span></a>
          </td>
          </tr>
    <?php endforeach ?>
      </tbody>
    </table>
		<div class="row" style="margin-top: 10px;">
		</div>
		</div>
		<div class="box-footer">
		</div>
		</div>
	</section>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	<?php if ($this->session->flashdata('sukses')): ?>
    $('.alert-success').html('<?php echo $this->session->flashdata('sukses') ?>').fadeIn().delay(4000).fadeOut('slow');
  <?php endif ?>
	});
</script>
