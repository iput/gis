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
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #origin-input,
      #destination-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 10px;
        margin-top: 20px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }

      #origin-input:focus,
      #destination-input:focus {
        border-color: #4d90fe;
      }

      #mode-selector {
        color: #fff;
        background-color: #4d90fe;
        margin-left: 12px;
        padding: 5px 11px 0px 11px;
      }

      #mode-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #panel-info{
  width: 100%;
  background: orange;
  padding: 10px;
  overflow: scroll;
  height: 500px;

  /*script tambahan khusus untuk IE */
  scrollbar-face-color: #CE7E00;
  scrollbar-shadow-color: #FFFFFF;
  scrollbar-highlight-color: #6F4709;
  scrollbar-3dlight-color: #11111;
  scrollbar-darkshadow-color: #6F4709;
  scrollbar-track-color: #FFE8C1;
  scrollbar-arrow-color: #6F4709;
}
    </style>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Temukan Alternatif</h2>
                    <div class="form-inline text-center">
                      <input type="text" id="origin-input" class="form-control" placeholder="Masukan Lokasi anda">
                      <input type="text" id="destination-input" class="form-control" placeholder="Masukan Tujuan anda">
                      <label class="control-label">Pilih Mode :</label>
                        <input type="radio" name="type" id="changemode-driving" checked="checked">
                        <label for="changemode-driving">Kendaraan</label>
                        <input type="radio" name="type" id="changemode-walking">
                        <label for="changemode-walking">berjalan</label>
                        <input type="radio" name="type" id="changemode-transit">
                        <label for="changemode-transit">Transit</label>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div id="map" style="width : 100%; height: 500px;"></div>
                  </div>
                  <div class="col-md-4">
                    <div id="panel-info" style="background-color:white;"></div>
                  </div>
                </div>
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
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: false,
          center : {lat : -7.9531699 , lng :112.59855563 },
          zoom: 13
        });

        new AutocompleteDirectionsHandler(map);
      }

       /**
        * @constructor
       */
      function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'WALKING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);
        this.directionsDisplay.setPanel(document.getElementById('panel-info'));

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

        this.setupClickListener('changemode-walking', 'WALKING');
        this.setupClickListener('changemode-transit', 'TRANSIT');
        this.setupClickListener('changemode-driving', 'DRIVING');

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgFgI-Iqpul47Fffg_DRm4OsP9LoZjlfs&libraries=places&callback=initMap&language=id"
        async defer></script>
</body>

</html>
