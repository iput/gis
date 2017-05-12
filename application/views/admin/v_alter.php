<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Aset Alternatif</h3>
			</div>
			<div class="box-body">
				<div class="alert alert-success" style="display:none;">

				</div>
			<a href="<?php echo base_url('admin/c_alter/add_alter') ?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Alternatif</a>
			<div class="table table-responsive" style="margin-top: 20px;">
			<table class ="table table-responsive table-bordered table-striped table-hover" id="tabel_jalan">
				<thead>
					<tr>
						<td>Nomor</td>
						<td>Nama Jalan</td>
						<td>Longitude</td>
						<td>Latitude</td>
						<td>Cara Tempuh</td>
						<td>Alternatif tujuan</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($alternatif as $data): ?>
						<?php $datajalan = $data['alter_tempuh'];
							$nama;
						if ($datajalan=='1') {
							$nama="jalan kaki";
						}elseif ($datajalan=='2') {
							$nama="bersepeda";
						}elseif ($datajalan=='3') {
							$nama="sepeda motor";
						}elseif ($datajalan=='4')
							$nama="mobil"
						 ?>
					<tr>
							<td><?php echo $data['id_alter'];?></td>
							<td><?php echo $data['nama_jalan'];?></td>
							<td><?php echo $data['long'];?></td>
							<td><?php echo $data['lat'];?></td>
							<td><?php echo $nama;?></td>
							<td><?php echo $data['lokasi_jalan']?></td>
							<td>
								<input type="hidden" name="id_alter" value="<?php echo $data['id_alter']?>">
								<a href="<?php echo base_url('admin/C_alter/editalter/'.$data['id_alter'])?>" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="<?php echo base_url('admin/c_alter/deleteAlter/'.$data['id_alter'])?>" class="btn btn-danger btn-flat" onclick="return confirm('anda yakin akan menghapus data ini ?')"><span class="glyphicon glyphicon-remove"></span></a>
							</td>

					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			</div>
			</div>
			<!--/.box-body-->
			<div class="box-footer">

		</div>
		<!--/.box-footer-->
		</div>
		<!--/.box-->
	</section>
	<!--/.content-->
</div>
<!--/.content-wrapper-->
<script type="text/javascript">
	<?php if ($this->session->flashdata('sukses')): ?>
		$('.alert-success').html('<?php echo $this->session->flashdata('sukses')?>').fadeIn().delay(2000).fadeOut('slow');
	<?php endif ?>
</script>
