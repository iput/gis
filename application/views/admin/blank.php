  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h2>Berita</h2>
            <p>Berita Masuk</p>
          </div>
          <div class="icon">
            <i class="fa fa-calendar"></i>
          </div>
          <a href="#" class="small-box-footer">selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h2>Kemacetan</h2>
            <p>Seputar kemacetan</p>
          </div>
          <div class="icon">
            <i class="fa fa-menus"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h2>Kemacetan</h2>
            <p>Seputar kemacetan</p>
          </div>
          <div class="icon">
            <i class="fa fa-menus"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-xs-6 col-lg-3">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h2>Alternatif</h2>
            <p>Alternatif tujuan anda</p>
          </div>
          <div class="icon">
            <i class="fa fa-chart"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Kemacetan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div id="mapcanvas" style="height:500px; width:100%;">
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
    <script >
    function myMap() {
    var myCenter = new google.maps.LatLng(-7.950884, 112.608102);
    var mapProp = {center:myCenter,
    	zoom:15,
    	scrollwheel:false,
    	draggable:false,
    	mapTypeId:google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("mapcanvas"),mapProp);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
    }
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1XPieE32_RzapVtgPa8KXDU9qeilbTE&callback=myMap"></script>
<!-- <script type="text/javascript">
  var map;
  var infowindow;
  var ikon;
  function initialize(lat, lng){
    var mapDiv = document.getElementById('mapcanvas');
    map = new google.maps.Map(mapDiv,{
      center : new google.maps.LatLng(lat,lng),
      zoom : 13,
      mapTypeId : google.maps/mapTypeId.ROADMAP
    });
    infowindow = new google.maps.InfoWindow();
    <?php foreach ($map as $row): ?>
    var latview = '<?php echo $row['latitude']?>';
    var lngview = '<?php echo $row['longitude']?>';
    var namaJalan = '<?php echo $row['nama_jalan']?>';
    var titik_macet = '<?php echo $row['titik_kemacetan']?>';
    createMarker(latview,lngview,namaJalan,titik_macet);
    <?php endforeach; ?>
  }

  function createMarker(lt, lng, namajalan,titik) {
    var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
    var latlng = new google.maps.LatLng(lt,lg);
    var marker = new google.maps.Marker({
      position : latlng,
      map : map,
      icon : image
    });
    google.maps.event.addListener(marker, 'click', function(){
      var myHtml = "<table>"+
                    "<tr><td>"+namaJalan+"</td></tr>"+
                    "<tr><td>"+titik+"</td></tr>"+
                    "</table>";
                    infowindow.setContent(myHtml);
                    infowindow.open(map,marker);
    });
  }
</script> -->
