<?php

	function terlambat($tgl_deadline, $tgl_pengembalian ){

	$tgl_deadline_pecah = explode("-", $tgl_deadline);
	$tgl_deadline_pecah = $tgl_deadline_pecah[2]."-".$tgl_deadline_pecah[1]."-".$tgl_deadline_pecah[0];

	$tgl_pengembalian_pecah = explode("-", $tgl_pengembalian);
	$tgl_pengembalian_pecah = $tgl_pengembalian_pecah[2]."-".$tgl_pengembalian_pecah[1]."-".$tgl_pengembalian_pecah[0];

	$selisih = strtotime($tgl_pengembalian_pecah)-strtotime($tgl_deadline_pecah);

	$selisih = $selisih/86400;

	if ($selisih>=1) {
		$hasil_tgl = floor($selisih);
	}else{
		$hasil_tgl = 0;
	}
	return $hasil_tgl;
	}




?>