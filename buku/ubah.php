<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("select * from tb_buku where id='$id'");

	$tampil = $sql->fetch_assoc();

	$lokasi = $tampil['lokasi'];

?>

<div class="panel panel-primary">
<div class="panel-heading">
		Ubah Data
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                   <form method="POST">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Penulis</label>
                                            <input class="form-control" name="penulis" value="<?php echo $tampil['penulis'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah_buku" value="<?php echo $tampil['jumlah_buku'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak 1"<?php if ($lokasi=='rak 1') {echo "selected";} ?>>Rak 1</option>
                                                <option value="rak 2"<?php if ($lokasi=='rak 2') {echo "selected";} ?>>Rak 2</option>
                                                <option value="rak 3"<?php if ($lokasi=='rak 3') {echo "selected";} ?>>Rak 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" type="date" name="tanggal_input" value="<?php echo $tampil['tanggal_input'];?>" />
                                            
                                        </div>	

                                        <div>
                                        	<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                                </div>
                            	</form>
                            </div>
</div>
</div>
</div>           

<?php

	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$jumlah_buku = $_POST['jumlah_buku'];
	$lokasi = $_POST['lokasi'];
	$tanggal_input = $_POST['tanggal_input'];

	$simpan = $_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("update tb_buku set judul='$judul', penulis='$penulis', penerbit='$penerbit', jumlah_buku='$jumlah_buku', lokasi='$lokasi', tanggal_input='$tanggal_input' where id='$id'");

		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Ubah Data Berhasil Disimpan")
					window.location.href="?page=buku";

				</script>
			<?php
		}
	}

?>                             