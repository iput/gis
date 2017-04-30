<div class="content-wrapper">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Track Lokasi anda</h3>
      </div>
      <div class="box-body">
        <form class="form-inline" action="index.html" method="post">
          <div class="form-group">
            <input type="text" name="asal" value="" placeholder="Alamat Asal" class="form-control">
            <input type="text" name="tujuan" value="" placeholder="Tujuan anda" class="form-control">
            <button type="submit" class="btn btn-default btn-flat">Rute</button>
          </div>
        </form>
          <div class="row">
            <div id="panel" style="width:300px;float:left;"></div>
            <div id="map" style="width:300px; height:400px; float:right;"></div>
          </div>
      </div>
    </div>
  </section>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var directionService = new google.maps.DirectionService();
var directionDisplay = new google.maps.DirectionRenderer();
var map = new google.mas.Map(document.getElementById('map'),{
  zoom : 12,
  mapTypeId : google.maps.mapTypeId.ROADMAP
});
directionDisplay.setMap(map);
directionDisplay.setPanel(document.getElementById('panel'));
var request = {
  origin : ''
}
</script>
