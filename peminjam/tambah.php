<script type="text/javascript">
    function validasi(form) {
        if (form.nis.value=="") {
            alert("NIS Tidak Boleh Kosong");
            form.nis.focus();
            return(false);
        }if (form.nama.value=="") {
            alert("Nama Tidak Boleh Kosong");
            form.nama.focus();
            return(false);
        }if (form.kelas.value=="") {
            alert("Kelas Tidak Boleh Kosong");
            form.kelas.focus();
            return(false);
        }if (form.jenis_kelamin.value=="") {
            alert("Jenis Kelamin Tidak Boleh Kosong");
            form.jenis_kelamin.focus();
            return(false);
        }
        return(true);
    }
    
</script>


<div class="panel panel-primary">
<div class="panel-heading">
        Tambah Peminjam
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                   <form method="POST">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" name="kelas" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
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

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
  
    $simpan = $_POST['simpan'];

    if ($simpan) {
        $sql = $koneksi->query("insert into tb_peminjam (nis, nama, kelas, jenis_kelamin)values('$nis', '$nama', '$kelas', '$jenis_kelamin')");

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