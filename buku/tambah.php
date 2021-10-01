<div class="panel panel-primary">
<div class="panel-heading">
		Tambah Data
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                   <form method="POST">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Penulis</label>
                                            <input class="form-control" name="penulis" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah_buku" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak 1">Rak 1</option>
                                                <option value="rak 2">Rak 2</option>
                                                <option value="rak3">Rak 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" type="date" name="tanggal_input" />
                                            
                                        </div>	

                                        <div>
                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
		$sql = $koneksi->query("insert into tb_buku (judul, penulis, penerbit, jumlah_buku, lokasi, tanggal_input)values('$judul', '$penulis', '$penerbit', '$jumlah_buku', '$lokasi', '$tanggal_input')");

		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Disimpan")
					window.location.href="?page=buku";

				</script>
			<?php
		}
	}

?>                             