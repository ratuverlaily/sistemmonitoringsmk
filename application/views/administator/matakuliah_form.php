<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Input Matakuliah
  	</div>

	<form method="post" action="<?php echo base_url('administrator/matakuliah/insert_data') ?>">
		<div class="form-group" >
			<label>Kode Matakuliah</label>
			<input type="text" name="kode_matakuliah" placeholder="Masukan Kode Matakuliah" class="form-control">
			<?php echo form_error('kode_matakuliah','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Nama Matakuliah</label>
			<input type="text" name="nama_matakuliah" placeholder="Masukan nama Matakuliah " class="form-control">
			<?php echo form_error('nama_matakuliah','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>SKS</label>
			<input type="text" name="sks" placeholder="Masukan SKS " class="form-control">
			<?php echo form_error('sks','<div class="text-danger small ml-3">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Semester</label>
			<input type="text" name="semester" placeholder="Masukan Jumlah Semester " class="form-control">
			<?php echo form_error('semester','<div class="text-danger small ml-3">','</div>') ?>
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
			<?php echo form_error('photo','<div class="text-danger small ml-3">','</div>') ?>
		</div>		

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>

</div>