<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI LINTANG</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>plugins/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>plugins/landing/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url()?>plugins/landing/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url()?>plugins/landing/css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">SI LINTANG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Alternatif</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Layanan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Tentang Kami</a>
                    </li>
                    <li>
                    <a href="#contact" class="page-scroll">Kritik & Saran</a>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">LALU LINTAS KOTA MALANG</h1>
                <hr>
                <p>LINTANG Membantu anda menempuh perjalanan dengan aman, nyaman, dan efektif. Bersama kami atasi masalah kemacetan dan sampai di tujuan anda dengan tepat waktu</p>
                <a href="<?php echo base_url('admin/admin/login')?>" class="btn btn-primary btn-xl page-scroll">Login</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
      <h3 class="text-center">Temukan alternatif anda</h3>
      <div class="container">
      <div class="form-inline">
        <input type="text" id="dest" style="width:500px;" class="form-control">
        <button type="button" id="cari" class="btn btn-info">Cari Rute</button>
      </div>
      <br><br>
      <div id="directions-panel" style="float:right; width:48%; height:500px; overflow:auto; background-color:#fff;"></div>
      <div id="map-canvas" style="width:50%; height:500px; "></div>
      </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Layanan Kami</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Informasi</h3>
                        <p class="text-muted">Temukan lokasi anda</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Alternatif</h3>
                        <p class="text-muted">Tempuh perjalanan anda dengan waktu yang lebih cepat</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Berita</h3>
                        <p class="text-muted">Berita terupdate seputar lalu lintas Kota Malang</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Kritik dan Saran</h3>
                        <p class="text-muted">Tinggalkan kritik dan saran untuk pengembangan LINTANG yang lebih baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="bg-dark">
      <div class="container">
      <div class="row">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Tentang Kami</h2>
                <p> SI LINTANG merupakan Sistem Informasi Lalu Lintas Kota Malang, Sistem ini di buat oleh kelompok 7 untuk memenuhi tugas matakuliah Sistem Informasi Geografi. SI LINTANG ini membantu memudahkan anda untuk menempuh perjalanan di area kota Malang. Sistem ini memberikan Informasi mengenai kondisi lalu lintas di Kota Malang, dan memberikan anda saran rute alternatif untuk sampai ke tempat tujuan lebih cepat, selain itu, sistem ini juga menghadirkan berita - berita terkini mengenai kondisi lalu lintas di area kota Malang</p>
            </div>
        </div>
      </div>
      </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"></h2>
                    <hr class="primary">
                    <p></p>
                    <h2 class="section-heading">Ayo Ikut Berbagi</h2>
                    <hr class="primary">
                    <p>Sedikit Banyak saran yang anda masukan merupakan suatu hal istimewa bagi kami
                      <br>TinggalKan saran Untuk Kami dalam rangka ikut mengembangkan sistem yang saat ini tengah kami tangani</p>
                </div>
                <div class="col-lg-4 col-lg-offset-4">
                    <form class="form-vertical" action="" method="post">
                      <div class="form-group">
                        <label>Nama anda</label>
                        <input type="text" name="txtNama" value="" class="form-control" placeholder="nama anda">
                      </div>
                      <div class="form-group">
                        <label>Email anda</label>
                        <input type="email" name="txtEmail" value="" placeholder="Email anda" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Kritik & Saran</label>
                        <textarea name="kritik" rows="8" cols="80" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Kirim Kritikan</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>plugins/landing/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>plugins/landing/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>plugins/landing/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()?>plugins/landing/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url()?>plugins/landing/js/creative.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgFgI-Iqpul47Fffg_DRm4OsP9LoZjlfs&sensor=false&libraries=places&language=id"></script>
    <script src="<?php echo base_url('gps/jquery.js')?>">

    </script>
    <script>

    var dest;
    var directionsDisplay;


  var directionsService = new google.maps.DirectionsService();
  directionsDisplay = new google.maps.DirectionsRenderer();

    $(document).ready(function() {
        var myOptions = {
            zoom: 12,
            center: new google.maps.LatLng(-7.9531699,112.59855563),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };


        var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);


      var autocomplete = new google.maps.places.Autocomplete((document.getElementById('dest')),{ types: ['geocode'] });
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
              autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,geolocation));
          });
      }
  });

  $(document).ready(function() {

    $("#cari").click(function(){

      dest = $("#dest").val();

      var defaultLatLng = new google.maps.LatLng(-7.9531699,112.59855563);

        if (navigator.geolocation) {
            function success(pos) {
                drawMap(pos.coords.latitude,pos.coords.longitude);
            }

            function fail(error) {
                drawMap(defaultLatLng);
            }

            navigator.geolocation.getCurrentPosition(success, fail, { maximumAge: 500000, enableHighAccuracy:true, timeout: 6000 });

        } else {
            drawMap(defaultLatLng);
        }

        function drawMap(lat,lng) {

            var myOptions = {
                zoom: 15,
                center: new google.maps.LatLng(lat,lng),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);


            var markerorigin = new google.maps.Marker({
                  position: new google.maps.LatLng(parseFloat(lat),parseFloat(lng)),
                  map: map,
                  title: "Origin",
                  visible:false
        });


            var request = {
          origin: markerorigin.getPosition(),
            destination: dest,
            provideRouteAlternatives:true,
            travelMode: google.maps.TravelMode.DRIVING
        };


        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(response);
            }
          });

          directionsDisplay.setMap(map);
          directionsDisplay.setPanel(document.getElementById('directions-panel'));


          var trafficLayer = new google.maps.TrafficLayer();
          trafficLayer.setMap(map);

        }
    });
  });
    </script>
</body>

</html>
