<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Materi Praktikum
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
  			foreach ($materi as $mtr) : ?>
  				<tr>
  					<td width="20px"><?php echo $no++ ?></td>
  					<td><?php echo $mtr->nama_kelas ?></td>
  					<td><?php echo $mtr->nama_jurusan ?></td>
  				  <td width="20px"><?php echo anchor('administrator/kelas/update/'.$mtr->id_kelas,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/kelas/delete/'.$mtr->id_kelas,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
  					
  				</tr>
  		<?php endforeach;?>		
  	</table>
</div>