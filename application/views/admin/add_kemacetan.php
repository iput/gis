<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Tambahkan Lokasi Kemacaten</h3>
			</div>
			<div class="box-body">
			<form class="form-horizontal" method="POST" action="">
			<div class="form-group">
				<label class="control-label col-md-3">Nama Jalan</label>
				<div class="col-md-8">
					<select class="form-control" name="cb_jalan">
						<option value="">Pilih jalan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Waktu kemacetan</label>
				<div class="col-md-8">
					<input type="text" name="txtJam" class="form-control" placeholder="waktu setempat">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Tingkat Kemacetan</label>
				<div class="col-md-8">
					<select class="form-control" class="cb_level">
						<option value="">Pilih Tingkat Kemacetan</option>
						<option value="0">Jalan Raya lancar</option>
						<option value="1">Kemacetan Sedang</option>
						<option value="2">Kemacetan Parah</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Titik Kemacetan</label>
				<div class="col-md-8">
					<input type="text" name="txtTitikMacet" class="form-control
					" id="titik_macet">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Longitude</label>
				<div class="col-md-8">
					<input type="text" name="txtlng" class="form-control" id="lng" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Latitude</label>
				<div class="col-md-8">
					<input type="text" name="txtlat" class="form-control" id="lat" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3"></div>
				<div class="col-md-8">
					<div id="peta"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3"></div>
				<div class="col-md-8">
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
	function myMap() {
		var map = new google.maps.Map(document.getElementById('peta'),{
			center : new google.maps.LatLng(-7.9531699,112.59855563),
			zoom : 15
		});
		marker = new google.maps.Marker({
			position : map.getCenter(),
			map : map,
			title : 'geser point untuk mendapat Lokasi',
			draggable : true,
			flat : false
		});
		google.maps.event.addListener(marker, 'dragend', function(){
			latlng = marker.getPosition();
			url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+latlng.lat()+','+latlng.lng()+'&sensor=false';
			$.get(url, function(data){
				if (data.status=='OK') {
					map.setCenter(data.results[0].geometry.location);
					$('#titik_macet').val(data.results[0].formatted_address);
					$('#lat').val(data.results[0].geometry.location.lat);
					$('#lng').val(data.results[0].geometry.location.lng);
				}
			});
		});
	}
</script>