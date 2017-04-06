<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Data Informasi Berita terUpdate</h3>
			</div>
			<div class="box-body">
				<?php 
				$formData = array('class'=>'form-horizontal');
				echo form_open_multipart(base_url("admin/C_berita/TambahBerita"), $formData);
				 ?>
				 <div class="form-group">
				 	<label class="control-label col-md-2">Judul Berita</label>
				 	<div class="col-md-8">
				 		<input type="text" name="txtJudulBerita" class="form-control">
				 	</div>
				 </div>
				 <div class="form-group">
				 	<label class="control-label col-md-2">Isi Berita</label>
				 	<div class="col-md-8">
				 		<textarea name="txtKonten" class="form-control" rows="7"></textarea>
				 	</div>
				 </div>
				 <div class="form-group">
				 	<label class="control-label col-md-2">Foto Bukti Berita</label>
				 	<div class="col-md-8">
				 		<input type="file" name="userfile" size="20">
				 	</div>
				 </div>
				 <div class="form-group">
				 	<div class="col-md-2"></div>
				 	<div class="col-md-8">
				 		<a href="<?php echo base_url('admin/c_berita') ?>" class="btn btn-danger btn-flat">Batal</a>
				 		<button type="submit" class="btn btn-success btn-flat">Tambahkan Berita</button>
				 	</div>
				 </div>
				 <?php echo form_close(); ?>
			</div>
		</div>
	</section>
</div>