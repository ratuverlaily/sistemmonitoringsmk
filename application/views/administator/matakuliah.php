<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Matakuliah
  	</div>
  	
  	<?php echo $this->session->flashdata('pesan'); ?>
  	
  	<?php echo anchor('administrator/matakuliah/tambah_matakuliah','<batton class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>  Tambah Matakuliah</batton>') ?>

  	<table class="table table-bordered table-striped table-hover">
  		<tr>
  			<th>No</th>
  			<th>Kode Matakuliah</th>
  			<th>Nama Matakuliah</th>
        <th>Program Studi</th>
  			<th colspan="3" >Aksi</th>
  		</tr>
  		<?php $no = 1; 
  			foreach ($matakuliah as $mtk) : ?>
  				<tr>
  					<td width="20px"><?php echo $no++ ?></td>
  					<td><?php echo $mtk->kode_matakuliah ?></td>
  					<td><?php echo $mtk->nama_matakuliah ?></td>
            <td><?php echo $mtk->nama_prodi ?></td>

            <td width="20px"><?php echo anchor('administrator/matakuliah/detail/'.$mtk->kode_matakuliah,'<div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>') ?></td>

  					<td width="20px"><?php echo anchor('administrator/matakuliah/update/'.$mtk->kode_matakuliah,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>

            <td width="20px"><?php echo anchor('administrator/matakuliah/delete/'.$mtk->kode_matakuliah,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
  					
  				</tr>
  		<?php endforeach;?>		
  	</table>
</div>