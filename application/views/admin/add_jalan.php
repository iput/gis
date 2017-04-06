<div class="content-wrapper">
	<section class="content">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Tambah data Jalan</h3>
		</div>
		<div class="box-body">
			<?php $dataForm = array('class'=>'form-horizontal',);
			echo form_open_multipart('admin/C_jalan/insert_jalan', $dataForm);
			 ?>
			<div class="form-group">
				<label class="control-label col-md-3">Nama Jalan</label>
				<div class="col-md-8">
					<input type="text" name="txtNamaJalan" class="form-control" placeholder="Nama Jalan" id="nama_jalan">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Longitude</label>
				<div class="col-md-8">
					<input type="text" name="txtLong" class="form-control" placeholder="Longitude" id="long" readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Latitude</label>
				<div class="col-md-8">
					<input type="text" name="txtLat" class="form-control" placeholder="Latitude" id="lat" readonly>
				</div>
			</div>
			<div class="form-group">
                <label class="control-label col-md-3"></label>
				<div class="col-md-8">
                    <div id="peta"></div>
               </div>
            </div>
            <div class="form-group">
            	<label class="control-label col-md-3">Foto Keramaian</label>
            	<div class="col-md-8">
            		<input type="file" name="userfile" class="form-control" multiple size="50">
            	</div>
            </div>
            <div class="form-group">
            	<div class="col-md-3"></div>
            	<div class="col-md-8">
            		<a href="<?php echo base_url('admin/c_jalan') ?>" class="btn btn-danger">Batal</a>
            		<button type="submit" class="btn btn-success">Simpan</button>
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
			title : 'geser untuk memilih lokasi jalan',
			draggable : true,
			flat : false
		});
		google.maps.event.addListener(marker, 'dragend', function(){
			latlng = marker.getPosition();
			url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ latlng.lat() + ',' + latlng.lng() + '&sensor=false';
			$.get(url, function(data){
				if (data.status=='OK') {
					map.setCenter(data.results[0].geometry.location);
					$('#nama_jalan').val(data.results[0].formatted_address);
					$('#long').val(data.results[0].geometry.location.lng);
					$('#lat').val(data.results[0].geometry.location.lat);
				}
			});
		});
	}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1XPieE32_RzapVtgPa8KXDU9qeilbTE&callback=myMap"async defer></script>