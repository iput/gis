<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Data Informasi Berita terUpdate</h3>
			</div>
			<div class="box-body">
				<form class="form-horizontal" method="POST" action="<?php echo base_url('admin/c_berita/TambahBerita') ?>">
				 <div class="form-group">
				 	<label class="control-label col-md-2">Judul Berita</label>
				 	<div class="col-md-8">
				 		<input type="text" name="txtJudulBerita" class="form-control" placeholder="masukan judul berita anda">
				 	</div>
				 </div>
				 <div class="form-group">
				 	<label class="control-label col-md-2">Penulis</label>
				 	<div class="col-md-8">
				 		<input type="text" name="txtPenulis" class="form-control" placeholder="Masukan nama anda">
				 	</div>
				 </div>
				 <div class="form-group">
				 	<label class="control-label col-md-2">Email Anda</label>
				 	<div class="col-md-8">
				 		<input type="email" name="txtEmailUser" class="form-control" placeholder="Masukan email anda">
				 	</div>
				 </div>
				 <div class="form-group">
				 	<label class="control-label col-md-2">Nomor HP </label>
				 	<div class="col-md-8">
				 		<input type="text" name="txtHP" class="form-control" placeholder="Masukan nomor hp anda">
				 	</div>
				 </div>
				 <div class="form-group">
				 	<label class="control-label col-md-2">Sumber Berita</label>
				 	<div class="col-md-8">
				 		<input type="text" name="txtSumber" class="form-control" placeholder="sumber berita">
				 	</div>
				 </div>
				 <div class="form-group">
				 	<label class="control-label col-md-2">Isi Berita</label>
				 	<div class="col-md-8">
				 		<textarea name="txtKonten" class="form-control" rows="7" placeholder="Konten berita anda"></textarea>
				 	</div>
				 </div>
				 <div class="form-group">
				 	<div class="col-md-2"></div>
				 	<div class="col-md-8">
				 		<a href="<?php echo base_url('admin/c_berita') ?>" class="btn btn-danger btn-flat">Batal</a>
				 		<input type="submit" name="btnSImpan" class="btn btn-success btn-flat" value="Simpan berita">
				 	</div>
				 </div>
				 </form>
			</div>
		</div>
	</section>
</div>
