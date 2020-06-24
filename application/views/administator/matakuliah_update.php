<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Update Prodi
  	</div>

  	<?php foreach($matakuliah as $mtk):?>
  		<form method="post" action="<?php echo base_url('administrator/matakuliah/update_aksi')?>">
	  		<div class="form-group" >
				<label>Kode Matakuliah</label>
				<input type="hidden" name="kode_matakuliah" value="<?php echo $mtk->kode_matakuliah ?>">
				<input type="text" name="nama_matakuliah" value="<?php echo $mtk->nama_matakuliah ?>" class="form-control">				
			</div>

			<div class="form-group">
				<label>Jumlah SKS</label>
				<input type="text" name="sks" value="<?php echo $mtk->sks ?>" class="form-control">				
			</div>

			<div class="form-group">
				<label>Semester</label>
				<input type="text" name="semester" value="<?php echo $mtk->semester ?>" class="form-control">				
			</div>


			<div class="form-group">
				<label>Program Studi</label>
				<select name="nama_prodi" class="form-control">
					<?php 
						foreach ($prodi as $prd):
							if($mtk->nama_prodi == $prd->nama_prodi){
								$select = 'selected';
							}else{
								$select = '';
							}
					?>
						<option value="<?php echo $prd->nama_prodi ?>" <?php echo $select ?>><?php echo $prd->nama_prodi ?></option>
					<?php endforeach;?>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button> 
  		</form>
  	<?php endforeach;?>
</div>