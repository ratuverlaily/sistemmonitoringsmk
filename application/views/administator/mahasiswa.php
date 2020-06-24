<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Mahasiswa
  	</div>
  	
  	<?php echo $this->session->flashdata('pesan'); ?>
  	
  	<?php echo anchor('administrator/mahasiswa/input','<batton class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>  Tambah Mahasiswa</batton>') ?>

  	<table class="table table-bordered table-striped table-hover">
  		<tr>
  			<th>No</th>
        <th>Nim</th>
  			<th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Email</th>
        <!--<th>Telpon</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Nama Prodi</th>-->
  			<th colspan="3" >Aksi</th>
  		</tr>
  		<?php $no = 1; 
  			foreach ($mahasiswa as $mhs) : ?>
  				<tr>
  					<td width="20px"><?php echo $no++ ?></td>
  					<td><?php echo $mhs->nim ?></td>
  					<td><?php echo $mhs->nama_lengkap ?></td>
            <td><?php echo $mhs->alamat ?></td>
            <td><?php echo $mhs->email ?></td>
            <!--<td><?php echo $mhs->telepon ?></td>
            <td><?php echo $mhs->tempat_lahir ?></td>
            <td><?php echo $mhs->tanggal_lahir ?></td>
            <td><?php echo $mhs->jenis_kelamin ?></td>
            <td><?php echo $mhs->nama_prodi ?></td>-->
            <td width="20px"><?php echo anchor('administrator/mahasiswa/detail/'.$mhs->nim,'<div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>') ?></td>
  					<td width="20px"><?php echo anchor('administrator/mahasiswa/update/'.$mhs->nim,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>

            <td width="20px"><?php echo anchor('administrator/mahasiswa/delete/'.$mhs->nim,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
  					
  				</tr>
  		<?php endforeach;?>		
  	</table>
</div>