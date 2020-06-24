<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Data Guru
  	</div>
  	
  	<?php echo $this->session->flashdata('pesan'); ?>
  	
  	<?php echo anchor('administrator/guru/input','<batton class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>  Tambah Jurusan</batton>') ?>

  	<table class="table table-bordered table-striped table-hover">
  		<tr>
  			<th>No</th>
  			<th>Nip</th>
  			<th>Nama Guru</th>
        <th>Bidang Study</th>
        <th>Alamat</th>
        <th>No Telpon</th>
  			<th colspan="3" >Aksi</th>
  		</tr>
  		<?php $no = 1; 
  			foreach ($guru as $gr) : ?>
  				<tr>
  					<td width="20px"><?php echo $no++ ?></td>
  					<td><?php echo $gr->nip ?></td>
  					<td><?php echo $gr->nama_guru ?></td>
            <td><?php echo $gr->bidang_study ?></td>
            <td><?php echo $gr->alamat ?></td>
            <td><?php echo $gr->no_telpon ?></td>
  					<td width="20px"><?php echo anchor('administrator/jurusan/kirim/'.$gr->id_guru,'<div class="btn btn-sm btn-primary"><i class="far fa-paper-plane"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/jurusan/update/'.$gr->id_guru,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/jurusan/delete/'.$gr->id_guru,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
  					
  				</tr>
  		<?php endforeach;?>		
  	</table>
</div>