<?php

	$nis = $_GET['nis'];

	$sql = $koneksi->query("select * from tb_peminjam where nis='$nis'");

	$tampil = $sql->fetch_assoc();

	
?>

<div class="panel panel-primary">
<div class="panel-heading">
        Ubah Data Peminjam
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                   <form method="POST">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" value="<?php echo $tampil['nis']?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" name="kelas" value="<?php echo $tampil['kelas']?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" value="<?php echo $tampil['jenis_kelamin']?>">
                                                <option value="Laki-laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
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

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
  
    $simpan = $_POST['simpan'];

    if ($simpan) {
        $sql = $koneksi->query("update tb_peminjam set nama='$nama', kelas='$kelas', jenis_kelamin='$jenis_kelamin'where nis='$nis'");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Ditambahkan")
                    window.location.href="?page=peminjam";

                </script>
            <?php
        }
    }

?>                             