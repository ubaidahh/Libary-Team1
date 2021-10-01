<?php

		$id = $_GET['id'];
		$judul = $_GET['judul'];
		$tanggal_pengembalian = $_GET['tanggal_pengembalian'];
		$lambat = $_GET['lambat'];



		if ($lambat > 7) {
			?>

				<script type="text/javascript">
					alert("Pinjam Buku Tidak Dapat Diperpanjang, Dikarenakan Lebih Dari 7 Hari. Segera Kembalikan Buku");
					window.location.href="?page=transaksi";
				</script>

			<?php
		}else{
			$pecah_tanggal_pengembalian = explode("_", $tanggal_pengembalian);
			$next_7_hari = mktime(0,0,0, $pecah_tanggal_pengembalian[1], $pecah_tanggal_pengembalian[0]+7, $pecah_tanggal_pengembalian[2]);
			$hari_next = date("d-m-y", $next_7_hari);

			$sql + $koneksi->query("update tb_transaksi set tanggal_pengembalian='$hari_next' where id='$id'");

			if ($sql){
				?>
					<script type="text/javascript">
						alert("Perpanjang Berhasil");
						window.location.href="?page=transaksi";
					</script>
				<?php
			}else{
				?>
					<script type="text/javascript">
						alert("Perpanjang Gagal");
						window.location.href="?page=transaksi";
					</script>
				<?php
			}
		}

?>