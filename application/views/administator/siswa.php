<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> DATA SISWA </div>
  	
  	<?php echo $this->session->flashdata('pesan'); ?>
  	
  	<?php echo anchor('administrator/mahasiswa/input','<batton class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>  Tambah Siswa</batton>') ?>
    <?php echo anchor('administrator/mahasiswa/input','<batton class="btn btn-sm btn-danger mb-3"><i class="far fa-paper-plane"></i>&nbsp;&nbsp; Kirim Data Ke Virtual</batton>') ?>

  	<table class="table table-bordered table-striped table-hover">
  		<tr>
  			<th>No</th>
        <th>Nisn</th>
  			<th>Nama Lengkap</th>
        <th>Tempat, Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>        
        <th>Jurusan</th>
        <th>Kelas</th>
  			<th colspan="3" >Aksi</th>
  		</tr>
  		<?php $no = 1; 
  			foreach ($siswa as $swa) : ?>
  				<tr>
  					<td width="20px"><?php echo $no++ ?></td>
  					<td><?php echo $swa->nisn ?></td>
  					<td><?php echo $swa->nama ?></td>
            <td><?php echo $swa->ttl ?></td>
            <td><?php echo $swa->jenis_kelamin ?></td>
            <td><?php echo $swa->alamat ?></td>
            <td><?php echo $swa->nama_kelas ?></td>
            <td><?php echo $swa->nama_jurusan ?></td>
            <td width="20px"><?php echo anchor('administrator/mahasiswa/detail/'.$swa->id_murid,'<div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>') ?></td>
  					<td width="20px"><?php echo anchor('administrator/mahasiswa/update/'.$swa->id_murid,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>

            <td width="20px"><?php echo anchor('administrator/mahasiswa/delete/'.$swa->id_murid,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
  					
  				</tr>
  		<?php endforeach;?>		
  	</table>
</div>