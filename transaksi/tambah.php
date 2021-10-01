<?php

$tgl_pinjam = date("d-m-y");
$tujuh_hari	= mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$kembali = date("d-m-y", $tujuh_hari);

?>



<div class="panel panel-primary">
<div class="panel-heading">
        Tambah Peminjam
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                   <form method="POST">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <select class="form-control" name="nama">
                                            	<?php

                                            	$sql = $koneksi->query("select * from tb_peminjam order by nis");

                                            	while ($data=$sql->fetch_assoc()) {
                                            			echo "<option value='$data[nis].$data[nama]'>$data[nis].$data[nama]</option>";
                                            		}	

                                            	?>
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <select class="form-control" name="judul">
                                            	<?php

                                            	$sql = $koneksi->query("select * from tb_buku order by id");

                                            	while ($data=$sql->fetch_assoc()) {
                                            			echo "<option value='$data[id].$data[judul]'>$data[id].$data[judul]</option>";
                                            		}	

                                            	?>
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type="text" name="tanggal_pinjam" value="<?php echo $tgl_pinjam?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Pengembalian</label>
                                            <input class="form-control" type="text" name="tanggal_pengembalian" value="<?php echo $kembali?>" readonly />
                                            
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

    if (isset($_POST['simpan'])) {
        
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

        $judul = $_POST['judul'];
        $pecah_judul = explode(".", $judul);
        $id = $pecah_judul[0];
        $judul = $pecah_judul[1];


        $nama = $_POST['nama'];
        $pecah_nama = explode(".", $nama);
        $nis = $pecah_nama[0];
        $nama = $pecah_nama[1];


        $sql = $koneksi->query("select * from tb_buku where judul = '$judul'");
        while ($data = $sql->fetch_assoc()) {
            $sisa = $data['jumlah_buku'];

            if ($sisa == 0) {
                ?>

                    <script type="text/javascript">
                       alert("Stok Buku Kosong, Transaksi Tidak Dapat Diproses. Silahkan Tambah Stok Buku");
                       window.location.href="?page=transaksi&aksi=tambah";     
                    </script>

                <?php
            }else{
                $sql = $koneksi->query("insert into tb_transaksi(nis, nama, judul, tanggal_pinjam, tanggal_pengembalian, status)values('$nis','$nama', '$judul', '$tanggal_pinjam', '$tanggal_pengembalian', 'pinjam')");

                $sql2 = $koneksi->query("update tb_buku set jumlah_buku=(jumlah_buku-1) where id='$id'");

                ?>

                    <script type="text/javascript">
                       alert("Simpan Data Berhasil Ditambah");
                       window.location.href="?page=transaksi";     
                    </script>

                <?php
            }
        }

    }



?>                             