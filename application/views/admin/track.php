<?php echo $map['js']; ?>
<div class="content-wrapper">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Track Lokasi anda</h3>
      </div>
      <div class="box-body">
        <form class="form-inline" action="<?php echo base_url('admin/c_jalan/getAlter')?>" method="post">
          <div class="form-group">
            <input type="text" name="asal" value="" placeholder="Alamat Asal" class="form-control">
            <input type="text" name="tujuan" value="" placeholder="Tujuan anda" class="form-control">
            <button type="submit" class="btn btn-default btn-flat">Rute</button>
          </div>
        </form>
            <?php echo $map['html']; ?>
            <div id="directionDiv"></div>
      </div>
    </div>
  </section>
</div>
