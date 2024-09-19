<?php

function nama_bulan($bulan, $callback) {
	$list_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	$nama = $list_bulan[$bulan];
	
	if (is_callable($callback)) {
		return $callback($nama);
	}
	return $nama;
}

$bulan = nama_bulan(2, function($val) {
		return strtoupper($val);
	});
echo $bulan; // Hasil: FEBRUARI