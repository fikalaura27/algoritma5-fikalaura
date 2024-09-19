<?php
// Tanpa argumen

// Contoh berikutnya kita definisikan argumen, sehingga kita dapat mencetak nama bulan sesuai dengan yang kita inginkan:
function nama_bulan($bulan, $tahun) {
	echo $bulan . ' ' . $tahun;
}
nama_bulan('Januari', 2016); // Hasil Januari 2016