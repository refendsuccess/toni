<div class="container-fluid">

   <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

   <?php foreach($barang as $brg) : ?>

   	<form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">

   		<div class="for-group">
   			<label>id_brg</label>
   			<input type="text" name="id_brg" class="form-control"
   			value="<?php echo $brg->id_brg ?>">
   			<label>nama barang</label>
   			<input type="text" name="nama_barang" class="form-control"
   			value="<?php echo $brg->nama_barang ?>">
   		</div>
   		<div class="for-group">
   			<label>keterangan</label>
   			<input type="text" name="keterangan" class="form-control"
   			value="<?php echo $brg->keterangan ?>">
   		</div>
   		<div class="for-group">
   			<label>kategori</label>
   			<input type="text" name="kategori" class="form-control"
   			value="<?php echo $brg->kategori ?>">
   		</div>
   		<div class="for-group">
   			<label>harga</label>
   			<input type="text" name="harga" class="form-control"
   			value="<?php echo $brg->harga ?>">
   		</div>
   		<div class="for-group">
   			<label>stock</label>
   			<input type="text" name="stock" class="form-control"
   			value="<?php echo $brg->stock ?>">
   		</div>
   		<button type="submit" class="btn btn-danger btn-sm mt-4">Simpan</button>
   		
   	</form>

   <?php endforeach; ?>
</div>