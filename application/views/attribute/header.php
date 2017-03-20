<!DOCTYPE html>
<html>
<head>
	<title>Landing Page Sistem informasi Lalu Lintas</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?=base_url('plugins/dist/img/icon.png')?>" type="image/gif">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/bootstrap/css/bootstrap.min.css') ?>">
  <script type="text/javascript" src="<?php echo base_url('plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('plugins/jQueryUI/jquery-ui.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" class="bg-success">
<nav class="navbar navbar-inverse">
<div class="jumbotron" style="    background: url('<?php echo base_url('/plugins/dist/img/background.png') ?>') fixed no-repeat;
    background-size: cover;
    height: 250px;">
  <div class="container">
    <h3>Sistem informasi geografis lalulinta kota malang</h3>
    <p>Sistem ini Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  
  </div>
</div>
<div class="container">
		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('landing') ?>"><span class="glyphicon glyphicon-globe"></span>&nbsp;Lokasiku</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
			<div class="input-group">
		      <input type="text" class="form-control" placeholder="Temukan Lokasimu">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button">Cari</button>
		      </span>
		    </div><!-- /input-group -->
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('landing') ?>">Beranda</a></li>
        <li><a href="<?php echo base_url('user/informasi') ?>">Info Kemacetan</a></li>
        <li><a href="<?php echo base_url('user/alternatif') ?>">Alternatif</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opsi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#fitur"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Tentang Aplikasi</a></li>
            <li><a href="#kegiatan"><span class="glyphicon glyphicon-retweet"></span>&nbsp;Pengembang</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;Bantuan</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>
<div class="container">