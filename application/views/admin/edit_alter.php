<div class="content-wrapper">
<section class="content">
<div class="box">
		<div class="box-header with-border">
	<h3 class="box-title"> Tambah data Jalan</h3>
</div>
<div class ="box-body">
	<form class="form-horizontal" method="POST" action="<?php echo base_url('admin/c_alter/updatealter')?>">
		<div class="form-group">
			<label class ="control-label col-md-3">Nama Jalan</label>
			<div class="col-md-8">
				<select class="form-control" name="cb_nama_jalan">
					<option value="">Pilih Jalan titik kemacetan</option>
					<?php foreach ($jalan as $data): ?>
						<option value="<?=$data['id_jalan']?>"><?=$data['id_jalan']?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Cara Tempuh</label>
			<div class="col-md-8">
				<select class="form-control" name="cb_metode">
					<option value="">Pilih metode tempuh altenatif</option>
					<option value="1">Jalan Kaki</option>
					<option value="2">bersepeda</option>
					<option value="3">Sepeda motor</option>
					<option value="4">Mobil</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Nama Alternatif</label>
			<div class="col-md-8">
				<input type="text" name="txtAlter" class="form-control" id="nama_alter" onchange="getAlamat()" value="<?= $lokasi_jalan?>">
			</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-3"> Longitude</label>
		<div class="col-md-8">
			<input type="text" name="txtLong" class="form-control" placeholder="Longitude" id="long" readonly value="<?=$long?>">
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-3">Latitude</label>
		<div class="col-md-8">
			<input type="text" name="txtLat" class="form-control" placeholder="Latitude" id="lat" readonly value="<?=$lat?>">
		</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3"></label>
			<div class="col-md-8">
				<input type="hidden" name="id_alter" value="<?php echo $id_alter?>">
				<a href="<?php echo base_url('admin/c_alter') ?>" class="btn btn-danger btn-flat">Batal</a>
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
		var address = document.getElementById('nama_alter').value;
		geocoder.geocode({'address' : address}, function(results, status){
			if (status==google.maps.GeocoderStatus.OK) {
				$('#long').val(results[0].geometry.location.lng());
				$('#lat').val(results[0].geometry.location.lat());
			}else{
				alert('geocode gagal : '+status);
			}
		});
	}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1XPieE32_RzapVtgPa8KXDU9qeilbTE"async defer></script>
