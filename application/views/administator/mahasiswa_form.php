<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Input Mahasiswa
  	</div>

	<form method="post" action="<?php echo base_url('administrator/mahasiswa/insert_data') ?>">
		<div class="form-group" >
			<label>Nim</label>
			<input type="text" name="nim" placeholder="Masukan Nim Mahasiswa" class="form-control">
			<?php echo form_error('nim','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" name="nama_lengkap" placeholder="Masukan Nama Lengkap " class="form-control">
			<?php echo form_error('nama_lengkap','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" placeholder="Masukan Alamat Mahasiswa" class="form-control">
			<?php echo form_error('alamat','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Masukan Email Mahasiswa " class="form-control">
			<?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Telpon</label>
			<input type="text" name="telepon" placeholder="Masukan Telpon Mahasiswa " class="form-control">
			<?php echo form_error('telepon','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control">
			<?php echo form_error('tempat_lahir','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" class="form-control">
				<option value="">Pilih Jenis Kelamin</option>
				<option value="laki-laki">Laki-Laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
			<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="text" name="tempat_lahir" placeholder="Masukan Tanggal Lahir" class="form-control">
			<?php echo form_error('tempat_lahir','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Program Studi</label>
			<select name="nama_prodi" class="form-control">
				<option value="">--Pilih Prodi--</option>
				<?php 
					foreach ($prodi as $prd):?>
					<option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi ?></option>
				<?php endforeach;?>
			</select>
			<?php echo form_error('nama_prodi','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			Upload Photo:
		    <input type="file" name="photo" id="fileToUpload">	
		    <?php echo form_error('tempat_lahir','<div class="text-danger small ml-3">','</div>') ?>	   
		</div>
		

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>

</div>