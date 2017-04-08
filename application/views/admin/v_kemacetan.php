<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Lokasi Potensi Kemacetan</h3>
			</div>
			<div class="box-body">
			<div class="alert alert-success" style="display: none;"></div>
        	<?= validation_errors()?>
				<a href="<?php echo base_url('admin/c_kemacetan/add_kemacetan') ?>" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Lokasi kemacetan</a>
				<div class="table table-responsive" style="margin-top: 20px;">
					<table class="table table-responsive table-bordered table-hover" id="
					tabel_kemacetan">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama Jalan</td>
								<td>Waktu Kemacetan</td>
								<td>Tingkat Kemacetan</td>
								<td>Titik Kemacetan</td>
								<td>Operasi</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript">
	<?php if ($this->session->flashdata('sukses')): ?>
		$('.alert-success').html('<?php echo $this->session->flashdata('sukses') ?>').fadeIn().delay(2000).fadeOut('slow');
	<?php endif ?>
</script>