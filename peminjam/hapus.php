<?php

	$nis = $_GET['nis'];

	$koneksi->query("delete from tb_peminjam where nis ='$nis'");

?>

<script type="text/javascript">
		window.location.href="?page=peminjam";
</script>