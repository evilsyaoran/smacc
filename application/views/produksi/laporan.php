    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="form-login">
            <h4>Laporan</h4><hr>
			<form class='form' method="post" action="<?php echo base_url()?>output/download_lap">
<?php 
if($this->session->flashdata('hasil')=="berhasil"){
	echo "<div class=\"alert alert-success\"><strong>Sukses!</strong> Operasi berhasil.</div>";
}
if($this->session->flashdata('hasil')=="gagal"){
	echo "<div class=\"alert alert-danger\"><strong>Gagal!</strong>Terdapat kesalahan, operasi gagal.</div>";
}
?>
				<table class='form'>
			<tr><td>Order by </td><td><select name="grup"><option value="transaksi"><option value="jenis">Nama Produk</option><option value="jual">Jumlah terjual</option><option value="beli">Tanggal</option></select></td></tr>
				</table>
				</br>
				<div class="wrapper">
					<span class="group-btn">     
						<input type="submit" value="Submit" class="btn btn-primary btn-md">
					</span>
				</div>
			</form>
            </div>
         </div>
        </div>