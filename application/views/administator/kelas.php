<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Kelas
  	</div>
  	
  	<?php echo $this->session->flashdata('pesan'); ?>
  	
  	<?php echo anchor('administrator/kelas/input','<batton class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>  Tambah Kelas</batton>') ?>

  	<table class="table table-bordered table-striped table-hover">
  		<tr>
  			<th>No</th>
  			<th>Kelas</th>
  			<th>Nama Jurusan</th>
  			<th colspan="2" align="center">Aksi</th>
  		</tr>
  		<?php $no = 1; 
  			foreach ($kelas as $kls) : ?>
  				<tr>
  					<td width="20px"><?php echo $no++ ?></td>
  					<td><?php echo $kls->nama_kelas ?></td>
  					<td><?php echo $kls->nama_jurusan ?></td>
  				  <td width="20px"><?php echo anchor('administrator/kelas/update/'.$kls->id_kelas,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/kelas/delete/'.$kls->id_kelas,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
  					
  				</tr>
  		<?php endforeach;?>		
  	</table>
</div>