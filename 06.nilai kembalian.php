<?php
function nama_bulan($bulan) {
	$nama_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	$semester =$bulan <7 ? 1 : 2;
	return array('bulan' => $nama_bulan[$bulan],'semester' => $semester);
}
$bulan = nama_bulan(3);
echo '<pre>'; print_r($bulan);
echo "<hr>";

//membuat fungsi 
function hitungUmur($thn_lahir, $thn_sekarang){
	  $umur =$thn_sekarang - $thn_lahir;
	  return $umur;
}

echo "umur saya adalah ". hitungUmur(2008, 2024) ."tahun";
echo "<hr>";
echo "<p><strong>by:Fika Laura";

?>