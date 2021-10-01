<?php

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

	$filename = "peminjam_excel-(".date('d-m-Y').").xlsx";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-excel2016");

?>

<h2>Laporan Peminjam</h2>

<table border="1">
	<tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jenis Kelamin</th>
    </tr>

    <?php

        $sql = $koneksi->query("select * from tb_peminjam");

        while ($data=$sql->fetch_assoc()) {

                                           
    ?>


    </tr>
        <td><?php echo $data['nis'];?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['kelas'];?></td>
        <td><?php echo $data['jenis_kelamin'];?></td>
   
    </tr>

    <?php  } ?>
	

</table>