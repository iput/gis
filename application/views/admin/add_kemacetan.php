<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Tambahkan Lokasi Kemacaten</h3>
			</div>

			<div class="box-body">
			<?= validation_errors()?>
			<form class="form-horizontal" method="POST" action="<?php echo base_url('admin/c_kemacetan/tambahKemacetan') ?>">
			<div class="form-group">
				<label class="control-label col-md-2">Nama Jalan</label>
				<div class="col-md-9">
					<select class="form-control" name="cb_jalan">
						<option value="">Pilih jalan</option>
						<?php foreach ($jalan as $row): ?>
							<option value="<?php echo $row['id_jalan'] ?>"><?php echo $row['nama_jalan'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Waktu kemacetan</label>
				<div class="col-md-9">
					<input type="text" name="txtJam" class="form-control" placeholder="waktu setempat">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Tingkat Kemacetan</label>
				<div class="col-md-9">
					<select class="form-control" name="cb_level">
						<option value="">Pilih Tingkat Kemacetan</option>
						<option value="normal">Normal</option>
						<option value="medium">Sedang</option>
						<option value="hard">Parah</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Titik Kemacetan</label>
				<div class="col-md-9">
					<input type="text" name="txtTitikMacet" class="form-control" id="titik_macet">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Longitude</label>
				<div class="col-md-9">
					<input type="text" name="txtLong" class="form-control" id="lng" readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Latitude</label>
				<div class="col-md-9">
					<input type="text" name="txtLat" class="form-control" id="lat" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-2"></div>
				<div class="col-md-9">
					<a href="<?php echo base_url('admin/c_kemacetan') ?>" class="btn btn-danger btn-flat">batal</a>
					<button type="submit" class="btn btn-success btn-flat">Simpan</button>
				</div>
			</div>
			</form>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript">
	function getAlamat() {
		var geocoder = new google.maps.Geocoder();
		var address = document.getElementById('titik_macet').val();
		geocoder.geocode({'address' : address}, function(results, status){
			if (status==google.maps.GeocoderStatus.OK) {
				$('#lng').val(results[0].geometry.location.lng());
				$('#lat').val(results[0].geometry.location.lat());
			}else{
				alert('geocode gagal : '+status);
			}
		});
	}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1XPieE32_RzapVtgPa8KXDU9qeilbTE&callback=myMap"async defer></script>
