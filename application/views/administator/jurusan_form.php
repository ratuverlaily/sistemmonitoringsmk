<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Input Jurusan
  	</div>

  	<div class="row">
  		<div class="col-sm-6">
  			<form method="post" action="<?php echo base_url('administrator/jurusan/input_aksi') ?>">
				<div class="form-group" >
					<label>Kode Jurusan</label>
					<input type="text" name="kode_jurusan" placeholder="Masukan Kode Jurusan " class="form-control">
					<?php echo form_error('kode_jurusan','<div class="text-danger small ml-3">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Nama Jurusan</label>
					<input type="text" name="nama_jurusan" placeholder="Masukan nama Jurusan " class="form-control">
					<?php echo form_error('nama_jurusan','<div class="text-danger small ml-3">','</div>') ?>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
			<!--<?php echo anchor('administrator/jurusan/kembali','<button type="submit" class="btn btn-danger">Kembali</button>') ?>-->

  		</div>
  		<div class="col-sm-6 "></div>
  	</div>
  </div>