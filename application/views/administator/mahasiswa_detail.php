<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fa fa eye"></i> Detail Matakuliah
	</div>	
	<table class="table table-hover table-striped table-bordered">
		<?php foreach ($detail as $dt): ?>
		<img src="<?php echo base_url("assets/img/upload/").$dt->photo ?>" height="200px">
		<tr>
			<th>Nim</th>
			<th><?php echo $dt->nim;?></th>
		</tr>
		<tr>
			<th>Nama Mahasiswa</th>
			<th><?php echo $dt->nama_lengkap;?></th>
		</tr>
		<tr>
			<th>Alamat</th>
			<th><?php echo $dt->alamat;?></th>
		</tr>
		<tr>
			<th>Email</th>
			<th><?php echo $dt->email;?></th>
		</tr>
		<tr>
			<th>telepon</th>
			<th><?php echo $dt->telepon;?></th>
		</tr>
		<tr>
			<th>Tempat Lahir</th>
			<th><?php echo $dt->tempat_lahir;?></th>
		</tr>
		<tr>
			<th>Tanggal Lahir</th>
			<th><?php echo $dt->tanggal_lahir;?></th>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<th><?php echo $dt->jenis_kelamin;?></th>
		</tr>
		<tr>
			<th>Nama Prodi</th>
			<th><?php echo $dt->nama_prodi;?></th>
		</tr>
		<?php endforeach;?>		
	</table>

	<?php echo anchor('administrator/mahasiswa','<div class="btn btn-sm btn-primary">Kembali</div>') ?>
</div>