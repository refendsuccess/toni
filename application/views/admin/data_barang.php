<div class="container-fluid ">
	<button class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah barang</button>
	<table class="table table-borderd">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOCK</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php
		$no=1;
		foreach($barang as $brg) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg->nama_barang ?></td>
			<td><?php echo $brg->keterangan ?></td>
			<td><?php echo $brg->kategori ?></td>
			<td><?php echo $brg->harga ?></td>
			<td><?php echo $brg->stock ?></td>
		
			<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></div>')?></td>
			<td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm "><i class="fa fa-trash-alt"></i></div>')?></td>
		</tr>
	<?php endforeach;?>
	</table>

</div>
<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rombok Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi';?>"
        method="post" enctype="multipart/form-data">

        <div class="form-group">
        	<label>nama_barang</label>
        	<input type="text" name="nama_barang" class="form-control">
        	
        </div>
        <div class="form-group">
        	<label>eterangan</label>
        	<input type="text" name="keterangan" class="form-control">
        	
        </div>
        <div class="form-group">
        	<label>kategori</label>
        	<select class="form-control" name="kategori">
        		<option>kenalpot</option>
        		<option>variasi</option>
        		<option>oli</option>
        		<option>velk</option>
        		<option>ban</option>
        	</select>
        </div>
        <div class="form-group">
        	<label>harga</label>
        	<input type="text" name="harga" class="form-control">
        	
        </div>
        <div class="form-group">
        	<label>stock</label>
        	<input type="text" name="stock" class="form-control">
        	
        </div>
        <div class="form-group">
        	<label>gambar</label>
        	<input type="file" name="gambar" class="form-control">
        	
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">keluar</button>
        <button type="submit" class="btn btn-success">simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>