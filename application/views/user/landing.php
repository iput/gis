<div class="container">
	<h2>Peta Lalilintas kota malang</h2>
</div>
<div id="googleMap" style="height:500px;width:100%;" class="bg-grey"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(-7.950884, 112.608102);
var mapProp = {center:myCenter, zoom:15, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>