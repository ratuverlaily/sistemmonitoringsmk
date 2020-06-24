<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Update Prodi
  	</div>

  	<?php foreach($prodi as $prd):?>
  		<form method="post" action="<?php echo base_url('administrator/prodi/update_aksi')?>">
	  		<div class="form-group" >
				<label>Kode Jurusan</label>
				<input type="hidden" name="id_prodi" value="<?php echo $prd->id_prodi ?>">
				<input type="text" name="kode_prodi" value="<?php echo $prd->kode_prodi ?>" class="form-control">				
			</div>

			<div class="form-group">
				<label>Nama Jurusan</label>
				<input type="text" name="nama_prodi" value="<?php echo $prd->nama_prodi ?>" class="form-control">				
			</div>

			<div class="form-group">
				<label>Nama Jurusan</label>
				<select name="nama_jurusan" class="form-control">
					<?php 
						foreach ($jurusan as $jrs):
							if($prd->nama_jurusan == $jrs->nama_jurusan){
								$select = 'selected';
							}else{
								$select = '';
							}
					?>
						<option value="<?php echo $jrs->nama_jurusan ?>" <?php echo $select ?>><?php echo $jrs->nama_jurusan ?></option>
					<?php endforeach;?>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button> 
  		</form>
  	<?php endforeach;?>
</div>