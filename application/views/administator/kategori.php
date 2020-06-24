<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Kategori Materi Praktikum
  	</div>
  	
  	<?php echo $this->session->flashdata('pesan'); ?>
  	
  	<?php echo anchor('administrator/kategori/input','<batton class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>  Tambah Kategori</batton>') ?>

  	<table class="table table-bordered table-striped table-hover">
  		<tr>
  			<th>No</th>
  			<th>Kategori</th>
  			<th>Materi</th>
        <th>Status</th>
  			<th colspan="3" >Aksi</th>
  		</tr>
  		<?php $no = 1; 
  			foreach ($kategori as $ktg) : ?>
  				<tr>
  					<td width="20px"><?php echo $no++ ?></td>
  					<td><?php echo $ktg->kategori ?></td>
  					<td><?php echo $ktg->materi ?></td>
            <td><?php echo $ktg->status ?></td>
  					<td width="20px"><?php echo anchor('administrator/kelas/update/'.$ktg->id_kategori,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/kelas/delete/'.$ktg->id_kategori,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>  					
  				</tr>
  		<?php endforeach;?>		
  	</table>
</div>