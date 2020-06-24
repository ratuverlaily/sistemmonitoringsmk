<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Input Kelas
  	</div>

  	<div class="row">
  		<div class="col-sm-6">
  			<form method="post" action="<?php echo base_url('administrator/kelas/input_aksi') ?>">
				<div class="form-group" >
					<label>Nama Kelas</label>
					<input type="text" name="nama_kelas" placeholder="Masukan Nama Kelas " class="form-control">
					<?php echo form_error('nama_kelas','<div class="text-danger small ml-3">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Nama Jurusan</label>
					<select name="nama_jurusan" class="form-control">
						<option value="">--Pilih Jurusan--</option>
						<?php 
							foreach ($jurusan as $jrs):?>
							<option value="<?php echo $jrs->id_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
						<?php endforeach;?>
					</select>
				</div>
				<?php echo form_error('nama_jurusan','<div class="text-danger small ml-3">','</div>') ?>

				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
			
  		</div>
  		<div class="col-sm-6 "></div>
  	</div>
  </div>