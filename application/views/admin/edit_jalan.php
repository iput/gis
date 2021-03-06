<div class="content-wrapper">
	<section class="content">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Tambah data Jalan</h3>
		</div>
		<?= validation_errors()?>
		<div class="box-body">
			<form class="form-horizontal" method="POST" action="<?php echo base_url('admin/c_jalan/update_jalan') ?>">
			<div class="form-group">
				<label class="control-label col-md-3">Nama Jalan</label>
				<div class="col-md-8">
					<input type="text" name="edit_txtNamaJalan" class="form-control" placeholder="Nama Jalan" id="editnama_jalan" value="<?= $nama_jalan?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Kondisi Jalan</label>
				<div class="col-md-8">
					<textarea name="kondisijalan" rows="8" cols="80" class="form-control"><?php echo $kondisi; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Longitude</label>
				<div class="col-md-8">
					<input type="text" name="edit_txtLong" class="form-control" placeholder="Longitude" id="long" readonly value="<?= $longitude?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Latitude</label>
				<div class="col-md-8">
					<input type="text" name="edit_txtLat" class="form-control" placeholder="Latitude" id="lat" readonly value="<?= $latitude?>">
				</div>
			</div>
			<div class="form-group">
                <label class="control-label col-md-3"></label>
				<div class="col-md-8">
                    <div id="peta"></div>
               </div>
            </div>
            <div class="form-group">
            	<div class="col-md-3"></div>
            	<div class="col-md-8">
								<input type="hidden" name="idJalan" value="<?= $id_jalan?>">
            		<a href="<?php echo base_url('admin/c_jalan') ?>" class="btn btn-danger btn-flat">Batal</a>
            		<button type="submit" class="btn btn-success btn-flat">Update</button>
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
