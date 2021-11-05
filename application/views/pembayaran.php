<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-danger">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "<h4>Total Belanja: Rp.".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>
			<h3>Masukan Alamat Pengiriman dan pembayaran</h3>
			<form method="post" action="<?php echo base_url() ?>dashboard/
				proses_bayar">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>Masukan Alamat</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>No. Telpon</label>
					<input type="text" name="no_telp" placeholder="No telpon Anda" class="form-control">
				</div>
				
				<div class="form-group">
					<label>No.rekening</label>
					<input type="text" name="no_rekening" placeholder="No rekening" class="form-control">
				</div>
				
				
				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>JNE EXPRES</option>
						<option>JNT EXPRES</option>
						<option>POS INDONESIA</option>
						<option>NINJA EXPRES</option>
						<option>GRAB</option>
						<option>GO-JEK</option>
					</select>
					
				</div>
				<div class="form-group">
					<label>Pilih Metode Pembayaran</label>
					<select class="form-control">
						<option> Bank BRI        </option>
						<option> Bank BNI        </option>
						<option> Bank BCA        </option>
						<option> OVO             </option>
						<option> DANA            </option>
						<option> Bank NTB Syariah</option>
					</select>
					
				</div>
				<button type="submit" class="btn btn-sm btn-success mb-3">Pesan</button>
			</form>
			<?php
			}else
			{
				echo "<h4>Keranjang Belanja Anda Kosong Silahkan Pilih Barang";
			} 
			 ?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>