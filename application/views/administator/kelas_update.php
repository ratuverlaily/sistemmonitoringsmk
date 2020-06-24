<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Update Kelas
  	</div>

  	<div class="row">
  		<div class="col-sm-6">
  			<?php foreach($kelas as $kls):?>
	  		<form method="post" action="<?php echo base_url('administrator/kelas/update_aksi')?>">
		  		<div class="form-group" >
					<label>Kelas</label>
					<input type="hidden" name="id_kelas" value="<?php echo $kls->id_kelas ?>">
					<input type="text" name="nama_kelas" value="<?php echo $kls->nama_kelas ?>" class="form-control">				
				</div>

				<div class="form-group">
					<label>Nama Jurusan</label>
					<select name="nama_jurusan" class="form-control">
						<?php 
							foreach ($jurusan as $jrs):
								if($kelas->id_jurusan == $jrs->id_jurusan){
									$select = 'selected';
								}else{
									$select = '';
								}
						?>
							<option value="<?php echo $jrs->id_jurusan ?>" <?php echo $select ?>><?php echo $jrs->nama_jurusan ?></option>
						<?php endforeach;?>
					</select>
				</div>

				<button type="submit" class="btn btn-primary">Simpan</button> 
	  		</form>
	  		<?php endforeach;?>
  		</div>
  		<div class="col-sm-6"></div>
  	</div>  	
</div>